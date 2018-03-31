<?php
namespace App\Services\Feed;

use Illuminate\Support\Facades\App;
use DB;

class FeedBuilder
{
    private $config;

    public function __construct()
    {
        $this->config = config()->get('feed');
    }

    public function render($type)
    {
        $feed = App::make("feed");	

        if ($this->config['use_cache']) {
            $feed->setCache($this->config['cache_duration'], $this->config['cache_key']);
        }
        
        if (!$feed->isCached()) {
            
            $posts = $this->getFeedData();
            
            $feed->title = $this->config['feed_title'];
            $feed->description = $this->config['feed_description'];
            $feed->logo = $this->config['feed_logo'];
            $feed->link = url('feed');
            $feed->setDateFormat('datetime');
            $feed->lang = 'en';
            $feed->setShortening(true);
            $feed->setTextLimit(250);
            

            if (!empty($posts)) {
                $feed->pubdate = $posts[0]->published_on;

                foreach ($posts as $post) {
                    
                    $link = route('news.go', ["id" => $post->hashid]);
                    $feed->add($post->title, 'Crypted-Daily.com', $link, $post->published_on, $post->body, $post->body);
                 
                }
            }
        }


        return $feed->render($type);
    }

    /**
     * Creating rss feed with our most recent posts. 
     * The size of the feed is defined in feed.php config.
     *
     * @return mixed
     */
    private function getFeedData()
    {
        $maxSize = $this->config['max_size'];
        $posts = DB::table('news')->orderBy('id', 'desc')->take(10)->get();
        return $posts;
    }
}