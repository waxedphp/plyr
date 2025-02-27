# Plyr

A simple, accessible and customisable media player for Video, Audio, YouTube and Vimeo.

[https://github.com/sampotts/plyr](https://github.com/sampotts/plyr)

MIT license

---
### PHP:

```php
  use \Waxedphp\Plyr\Setter as Plyr;

  $obj = new Plyr($this->waxed);

  $this->waxed->pick('section1')->display([
    'data' => [
      'payload' => $obj->value(),
    ],
  ],$this->tpl.'/plyr');      



```


---
### HTML:

```html

<div class="waxed-plyr" data-name="data.payload" >
  <iframe
    src="https://www.youtube.com/embed/bTqVqk7FSmY?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
    allowfullscreen
    allowtransparency
    allow="autoplay"
  ></iframe>
</div>



```
---
---

### PHP methods:

```php

  $obj->resetCommands();
  // Empty command queue.
  // This is done automatically on $obj->value();

  $obj->play();
  // Command to play.
  
  $obj->pause();
  // Command to pause.
  
  $obj->stop();
  // Command to stop.
  
  $obj->rewind(100);
  // Command to rewind.
  
  $obj->forward(100);
  // Command to fast forward.
  
  $obj->increaseVolume(10);
  // Command
  
  $obj->decreaseVolume(10);
  // Command

  $obj->toggleCaptions(true);
  // Command

  $obj->airplay();
  // Command

  $obj->setPreviewThumbnails();
  // Command

  $obj->toggleControls(false);
  // Command

  // Following are options:

  $obj->setCurrentTime(125.5);
  //Gets or sets the currentTime for the player. The setter accepts a float in seconds.
  
  $obj->setVolume(0.9);
  //Gets or sets the volume for the player. The setter accepts a float between 0 and 1.
  
  $obj->setMuted(true);
  //Gets or sets the muted state of the player. The setter accepts a boolean.
  
  $obj->setSpeed(0.7);
  //Gets or sets the speed for the player. The setter accepts a value in the options specified in your config. Generally the minimum should be 0.5.
  
  $obj->setQuality();
  //Gets or sets the quality for the player. The setter accepts a value from the options specified in your config.
  
  $obj->setLoop(true);
  //Gets or sets the current loop state of the player. The setter accepts a boolean.
  
  $obj->setSource($sourceArray);
  //Gets or sets the current source for the player. The setter accepts an object. See source setter below for examples.
  
  $obj->setPoster('/thumbnails/video.jpg');
  //Gets or sets the current poster image for the player. The setter accepts a string; the URL for the updated poster image.
  
  $obj->setPreviewThumbnails();
  //Gets or sets the current preview thumbnail source for the player. The setter accepts a string
  
  $obj->setAutoplay(true);
  //Gets or sets the autoplay state of the player. The setter accepts a boolean.
  
  $obj->setCurrentTrack(12);
  //Gets or sets the caption track by index. -1 means the track is missing or captions is not active
  
  $obj->setLanguage('en');
  //Gets or sets the preferred captions language for the player.
  //The setter accepts an ISO two-letter language code.
  //Support for the languages is dependent on the captions you include.
  //If your captions don't have any language data, or if you have multiple tracks with the same language,
  //you may want to use currentTrack instead.
  
  $obj->setPip(true);
  //Gets or sets the picture-in-picture state of the player. The setter accepts a boolean.
  //This currently only supported on Safari 10+ (on MacOS Sierra+ and iOS 10+) and Chrome 70+.
  
  $obj->setRatio();
  //Gets or sets the video aspect ratio. The setter accepts a string in the same format as the ratio option.
  
  $obj->setDownload();
  //Gets or sets the URL for the download button. The setter accepts a string containing a valid absolute URL.

  $obj->value();

```
