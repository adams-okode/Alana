
/**
* Theme: Adminox Admin Template
* Author: Coderthemes
* Ratings
*/

!function(a){a(function(){a("#default").raty({starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-warning"}),a("#score").raty({score:3,starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-danger"}),a("#score-callback").raty({score:function(){return a(this).attr("data-score")}}),a("#scoreName").raty({scoreName:"entity[score]",starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-warning"}),a("#number").raty({number:10,starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-danger"}),a("#number-callback").raty({number:function(){return a(this).attr("data-number")}}),a("#numberMax").raty({numberMax:5,number:100,starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-purple"}),a("#readOnly").raty({readOnly:!0,score:3,starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-success"}),a("#readOnly-callback").raty({readOnly:function(){return!0}}),a("#noRatedMsg").raty({readOnly:!0,noRatedMsg:"I'am readOnly and I haven't rated yet!",starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-danger"}),a("#halfShow-true").raty({score:3.26}),a("#halfShow-false").raty({halfShow:!1,score:3.26,starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-danger"}),a("#round").raty({round:{down:.26,full:.6,up:.76},score:3.26,starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-pink"}),a("#half").raty({half:!0}),a("#starHalf").raty({half:!0,starHalf:"fa fa-star-half text-danger",starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-danger"}),a("#click").raty({click:function(t,r){alert("ID: "+a(this).attr("id")+"\nscore: "+t+"\nevent: "+r.type)}}),a("#hints").raty({hints:["a",null,"",void 0,"*_*"]}),a("#star-off-and-star-on").raty({starOff:"fa fa-bell-o text-muted",starOn:"fa fa-bell text-custom"}),a("#cancel").raty({cancel:!0,starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-danger"}),a("#cancelHint").raty({cancel:!0,cancelHint:"My cancel hint!",starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-success"}),a("#cancelPlace").raty({cancel:!0,cancelPlace:"right",starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-purple"}),a("#cancel-off-and-cancel-on").raty({cancel:!0,cancelOff:"fa fa-minus-square-o text-muted",cancelOn:"fa fa-minus-square text-danger"}),a("#iconRange").raty({iconRange:[{range:1,on:"fa fa-cloud",off:"fa fa-circle-o"},{range:2,on:"fa fa-cloud-download",off:"fa fa-circle-o"},{range:3,on:"fa fa-cloud-upload",off:"fa fa-circle-o"},{range:4,on:"fa fa-circle",off:"fa fa-circle-o"},{range:5,on:"fa fa-cogs",off:"fa fa-circle-o"}]}),a("#size-md").raty({cancel:!0,half:!0}),a("#size-lg").raty({cancel:!0,half:!0}),a("#target-div").raty({cancel:!0,target:"#target-div-hint",starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-custom"}),a("#targetType").raty({cancel:!0,target:"#targetType-hint",targetType:"score",starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-warning"}),a("#targetFormat").raty({target:"#targetFormat-hint",targetFormat:"Rating: {score}",starOff:"fa fa-star-o text-muted",starOn:"fa fa-star text-danger"}),a("#mouseover").raty({mouseover:function(t,r){alert("ID: "+a(this).attr("id")+"\nscore: "+t+"\nevent: "+r.type)}}),a("#mouseout").raty({width:150,mouseout:function(t,r){alert("ID: "+a(this).attr("id")+"\nscore: "+t+"\nevent: "+r.type)}})})}(jQuery)
