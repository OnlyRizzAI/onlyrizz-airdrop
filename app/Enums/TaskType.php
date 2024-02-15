<?php

namespace App\Enums;

enum TaskType: string
{
    case FollowTwitter = 'twitter_follow';
    case JoinDiscord = 'discord_join';
    case JoinTelegram = 'telegram_join';
    case SubscribeYoutube = 'youtube_subscribe';
    case LikeTweet = 'twitter_like';
    case Retweet = 'twitter_retweet';
    case QuoteTweet = 'twitter_quote';
    case MentionTweet = 'twitter_mention';
}
