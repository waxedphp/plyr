
;(function ( $, window, document, undefined ) {

    var pluginName = 'plyr',
        _search = '.waxed-plyr',
        _api = [],
        defaults = {
            propertyName: "value"
        },
        inited = false,
        allowedOptions = [
        'currentTime',
        'volume',
        'muted',
        'speed',
        'quality',
        'loop',
        'source',
        'poster',
        'previewThumbnails',
        'autoplay',
        'currentTrack',
        'language',
        'pip',
        'ratio',
        'download'
        ],
        allowedCommands = [
        'play',
        'pause',
        'stop',
        'rewind',
        'forward',
        'increaseVolume',
        'decreaseVolume',
        'toggleCaptions',
        'airplay',
        'setPreviewThumbnails',
        'toggleControls'
        ];


    function Instance(pluggable,element,dd){
      var that = this;
      this.pluggable = pluggable;
      this.element = element;
      this.o = element;
      this.t = pluginName;
      this.dd = dd;
      this.name = '';
      this.cfg = {
      };

      this.invalidate = function(RECORD){

      },

      this.setRecord = function(RECORD){
        if (typeof that.dd.name == 'undefined') return;
        var rec = that.pluggable.getvar(that.dd.name, RECORD);
        if (typeof rec != 'object') { return; };
        //console.log(rec);
        if (typeof rec.config == 'object') {
          for(var x in rec.config) {
            if (allowedOptions.includes(x)) {
              this.player[x] = rec.config[x];
            };
          }
        };
        if (typeof rec.commands == 'object') {
          for(var i=0;i<rec.commands.length;i++) {
            if (typeof rec.commands[i].cmd != 'string') continue;
            var cmd = rec.commands[i].cmd;
            //console.log(cmd);
            if (!allowedCommands.includes(cmd)) continue;
            if (typeof rec.commands[i].value != 'undefined') {
              this.player[cmd](rec.commands[i].value);
            } else {
              //console.log('CMD', cmd, this.player);
              this.player[cmd]();
            }
          }
        };
      },


      this.free = function() {

      },

      this.init=function() {

        this.player = new Plyr(that.element);
        //plyr replaces all class names, so this is a must:
        $(that.element).addClass('waxed-plyr');

        inited = true;
      },
      this._init_();
    }

    $.waxxx(pluginName, _search, Instance, _api);


})( jQuery, window, document );
/*--*/
//# sourceURL: /js/jam/boilerplate/plugin.js
