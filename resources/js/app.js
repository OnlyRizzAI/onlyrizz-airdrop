import Alpine from 'alpinejs';
import { createWeb3Modal, defaultWagmiConfig } from '@web3modal/wagmi';
import { mainnet } from 'viem/chains';
import { reconnect, watchAccount } from '@wagmi/core';

window.Alpine = Alpine;

Alpine.start();

window.onTaskClicked = function (taskId) {
    const form = document.getElementById('taskForm');
    form.action = `/tasks/complete/${taskId}`;
    form.submit();
}

function setupWallet() {
    // 1. Define constants
    const projectId = '44b3e066ea370fe3d19897283ae1acbd';

    // 2. Create wagmiConfig
    const metadata = {
        name: 'Web3Modal',
        description: 'Web3Modal Example',
        url: 'https://web3modal.com', // origin must match your domain & subdomain
        icons: ['https://avatars.githubusercontent.com/u/37784886']
    };

    const chains = [mainnet];

    const config = defaultWagmiConfig({
        chains, // required
        projectId, // required
        metadata, // required
        enableWalletConnect: true, // Optional - true by default
        enableInjected: true, // Optional - true by default
        enableEIP6963: true, // Optional - true by default
        enableCoinbase: true, // Optional - true by default
        // ...wagmiOptions, // Optional - Override createConfig parameters
    });

    reconnect(config);

    // 3. Create modal
    return createWeb3Modal({
        wagmiConfig: config,
        projectId,
        enableAnalytics: false // Optional - defaults to your Cloud configuration
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const modal = setupWallet();
    window.modal = modal;

    const watchForWalletConnection = () => {
        const unwatch = watchAccount(modal.wagmiConfig, {
            onChange(account) {
                if (account.address) {
                    console.log('sending wallet address');
                    const form = document.getElementById('walletConnectForm');
                    form.elements['address'].value = account.address;
                    form.submit();
                    unwatch();
                }
            }
        });
    };

    if (window.phpData.isAuthenticated && !window.phpData.isWalletConnected) {
        watchForWalletConnection();
    }
});
