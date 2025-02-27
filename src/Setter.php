<?php
namespace Waxedphp\Plyr;

class Setter extends \Waxedphp\Waxedphp\Php\Setters\AbstractSetter {

  protected ?int $currentTime = null;
  // 	✓ 	✓ 	Gets or sets the currentTime for the player. The setter accepts a float in seconds.
  
  protected ?float $volume = null;
  // 	✓ 	✓ 	Gets or sets the volume for the player. The setter accepts a float between 0 and 1.
  
  protected ?bool $muted = null;
  // 	✓ 	✓ 	Gets or sets the muted state of the player. The setter accepts a boolean.
  
  protected ?float $speed = null;
  // 	✓ 	✓ 	Gets or sets the speed for the player. The setter accepts a value in the options specified in your config. Generally the minimum should be 0.5.
  
  protected ?float $quality = null;
  // 	✓ 	✓ 	Gets or sets the quality for the player. The setter accepts a value from the options specified in your config.
  
  protected ?bool $loop = null;
  // 	✓ 	✓ 	Gets or sets the current loop state of the player. The setter accepts a boolean.
  
  protected ?array $source = null;
  // 	✓ 	✓ 	Gets or sets the current source for the player. The setter accepts an object. See source setter below for examples.

  protected ?string $poster = null;
  // 	✓ 	✓ 	Gets or sets the current poster image for the player. The setter accepts a string; the URL for the updated poster image.
  
  protected ?string $previewThumbnails = null;
  // 	✓ 	✓ 	Gets or sets the current preview thumbnail source for the player. The setter accepts a string
  
  protected ?bool $autoplay = null;
  // 	✓ 	✓ 	Gets or sets the autoplay state of the player. The setter accepts a boolean.
  
  protected ?int $currentTrack = null;
  // 	✓ 	✓ 	Gets or sets the caption track by index. -1 means the track is missing or captions is not active
  
  protected ?string $language = null;
  // 	✓ 	✓ 	Gets or sets the preferred captions language for the player. The setter accepts an ISO two-letter language code. Support for the languages is dependent on the captions you include. If your captions don't have any language data, or if you have multiple tracks with the same language, you may want to use currentTrack instead.
  
  protected ?bool $pip = null;
  // 	✓ 	✓ 	Gets or sets the picture-in-picture state of the player. The setter accepts a boolean. This currently only supported on Safari 10+ (on MacOS Sierra+ and iOS 10+) and Chrome 70+.
  
  protected ?string $ratio = null;
  // 	✓ 	✓ 	Gets or sets the video aspect ratio. The setter accepts a string in the same format as the ratio option.
  
  protected ?string $download = null;
  // 	✓ 	✓ 	Gets or sets the URL for the download button. The setter accepts a string containing a valid absolute URL.


  /**
   * @var array<mixed> $setup
   */
  private array $setup = [
  ];

  /**
   * @var array<mixed> $commands
   */
  private array $commands = [
  ];
  
  /**
   * allowed options
   *
   * @var array<mixed> $_allowedOptions
   */
  protected array $_allowedOptions = [
  'currentTime',// 	✓ 	✓ 	Gets or sets the currentTime for the player. The setter accepts a float in seconds.
  'volume',// 	✓ 	✓ 	Gets or sets the volume for the player. The setter accepts a float between 0 and 1.
  'muted',// 	✓ 	✓ 	Gets or sets the muted state of the player. The setter accepts a boolean.
  'speed',// 	✓ 	✓ 	Gets or sets the speed for the player. The setter accepts a value in the options specified in your config. Generally the minimum should be 0.5.
  'quality',// 	✓ 	✓ 	Gets or sets the quality for the player. The setter accepts a value from the options specified in your config.
  'loop',// 	✓ 	✓ 	Gets or sets the current loop state of the player. The setter accepts a boolean.
  'source',// 	✓ 	✓ 	Gets or sets the current source for the player. The setter accepts an object. See source setter below for examples.
  'poster',// 	✓ 	✓ 	Gets or sets the current poster image for the player. The setter accepts a string; the URL for the updated poster image.
  'previewThumbnails',// 	✓ 	✓ 	Gets or sets the current preview thumbnail source for the player. The setter accepts a string
  'autoplay',// 	✓ 	✓ 	Gets or sets the autoplay state of the player. The setter accepts a boolean.
  'currentTrack',// 	✓ 	✓ 	Gets or sets the caption track by index. -1 means the track is missing or captions is not active
  'language',// 	✓ 	✓ 	Gets or sets the preferred captions language for the player. The setter accepts an ISO two-letter language code. Support for the languages is dependent on the captions you include. If your captions don't have any language data, or if you have multiple tracks with the same language, you may want to use currentTrack instead.
  'pip',// 	✓ 	✓ 	Gets or sets the picture-in-picture state of the player. The setter accepts a boolean. This currently only supported on Safari 10+ (on MacOS Sierra+ and iOS 10+) and Chrome 70+.
  'ratio',// 	✓ 	✓ 	Gets or sets the video aspect ratio. The setter accepts a string in the same format as the ratio option.
  'download',// 	✓ 	✓ 	Gets or sets the URL for the download button. The setter accepts a string containing a valid absolute URL.
  ];

  function resetCommands() {
    $this->commands = [];
    return $this;
  }

  function play() {
    $this->commands[] = ['cmd' => 'play'];
    return $this;
  }
  function pause(){
    $this->commands[] = ['cmd' => 'pause'];
    return $this;
  }
  function stop(){
    $this->commands[] = ['cmd' => 'stop'];
    return $this;
  }
  
  function rewind(int $amount){
    $this->commands[] = ['cmd' => 'rewind', 'value' => $amount];
    return $this;
  }
  function forward(int $amount){
    $this->commands[] = ['cmd' => 'forward', 'value' => $amount];
    return $this;
  }
  function increaseVolume(int $amount) {
    $this->commands[] = ['cmd' => 'increaseVolume', 'value' => $amount];
    return $this;
  }
  function decreaseVolume(int $amount) {
    $this->commands[] = ['cmd' => 'decreaseVolume', 'value' => $amount];
    return $this;
  }
  
  function toggleCaptions(bool $value){
    $this->commands[] = ['cmd' => 'toggleCaptions', 'value' => $value];
    return $this;
  }
  function airplay() {
    $this->commands[] = ['cmd' => 'airplay'];
    return $this;
  }
  function setPreviewThumbnails(){
    $this->commands[] = ['cmd' => 'setPreviewThumbnails'];
    return $this;
  }
  function toggleControls(bool $value){
    $this->commands[] = ['cmd' => 'toggleControls', 'value' => $value];
    return $this;
  }

  /**
  * value
  *
  * @param mixed $value
  * @return array<mixed>
  */
  public function value(mixed $value = null): array {
    $a = [];
    $b = $this->getArrayOfAllowedOptions();
    if (!empty($b)) {
      $a['config'] = $b;
    }
    if (!empty($this->commands)) {
      $a['commands'] = $this->commands;
      $this->resetCommands();
    }
    
    if (!is_null($value)) {
      $a['value'] = $value;
    }
    return $a;
  }

}
