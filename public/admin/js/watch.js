
               


                function addEvent(element, eventName, callback) {
                    if (element.addEventListener) {
                        element.addEventListener(eventName, callback, false);
                    }
                    else {
                        element.attachEvent(eventName, callback, false);
                    }
                }
                $(document).ready(function(){
                    var vimeoPlayers = document.querySelectorAll('iframe'),

                    player = vimeoPlayers[0];
                    $f(player).addEvent('ready', ready);
                });
                function ready(player_id) {
                    console.log('player');

                    froogaloop = $f(player_id),
                    function getDuration() {

                            froogaloop.api('getDuration', function (value, player_id) {
                               return value;
                            });

                    }

                    function setupEventListeners() {

                        this["plnzVideoTracker"+player_id]=[];
                        this["lastUpdate"+player_id];
                        this["lastSent"+player_id];
                        this["duration"+player_id];
                        function onPlayProgress() {

                                froogaloop.addEvent('playProgress', function(data) {

                                    var currentPercent = Math.floor(data.seconds);

                                    if (this["plnzVideoTracker"+player_id].indexOf(currentPercent) != -1) {
                                    return;
                                    }
                                    var timestamp = (new Date()).getTime();
                                    timestamp = Math.floor(timestamp / 1000);
                                    this["lastUpdate"+player_id] = timestamp;
                                    this["plnzVideoTracker"+player_id].push(currentPercent);
                                    this["duration"+player_id]=data.duration;

                                });
                        }


                        function onPause() {

                                froogaloop.addEvent('pause', function(data) {
                                    console.log('pause event');
                                    updateProgress();
                                });


                        }

                        function onFinish() {
                            updateProgress();
                                froogaloop.addEvent('finish', function(data) {
                                    console.log('finish');
                                    updateProgress();
                                });
                        }

                        function onSeek() {
                                froogaloop.addEvent('seek', function(data) {
                                    updateProgress();
                                });

                        }

                        setInterval(updateProgress, 30000);

                         function updateProgress () {
                            var currPrecent=$('#precent').val();
                            if(currPrecent>=100){
                            return;
                            }

                            if ( this["lastSent"+player_id] == this["lastUpdate"+player_id]) {
                            return;
                            }

                            this["lastSent"+player_id] =  this["lastUpdate"+player_id];

                            duration=froogaloop.api('getDuration', function (value, player_id) {
                               return value;
                            });

                            $.ajax({
                                url: "/admin/videos/watch",
                                type: "POST",
                                cache: false,
                                data:{
                                    _token: "{{ csrf_token() }}",
                                    video:'{{$c_details[$vid]->videoId}}',
                                    duration:this["duration"+player_id],
                                    progress: this["plnzVideoTracker"+player_id],
                                    course:'{{$c_details[$vid]->courseID}}'
                                },
                                success: function(data){
                                    console.log(data);
                                    if ('next' in data){
                                        if(data.next!=0){
                                            var next='#next'+data.next;
                                            var nextLink='#nextLink'+data.next;
                                            var link='/course/details/{{$c_details[$vid]->courseID}}/viedo/'+data.next;
                                            $(nextLink).attr('href',link);
                                            $(nextLink).removeAttr("style");
                                            $(next).attr('style','pointer-events: auto;background:white');
                                        }
                                        var duration='#duration'+'{{$c_details[$vid]->videoId}}';
                                        if (!$('#watch').length)
                                            $(duration).after(' <i id="watch" style="color:green" class="fa fa-check" aria-hidden="true"></i>');

                                        
                                    }
                                    $('#precent').val(data.precent);
                                    console.log(data);
                                }
                            });

                            }

                        onPlayProgress();
                        onPause();
                        onFinish();
                        onSeek();
                    }


                    setupEventListeners();
                }