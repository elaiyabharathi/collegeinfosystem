<style type="text/css">
.margin-top-20{
  margin-top: 20px;
}
body{
  background:url('http://www.wallpaperup.com/uploads/wallpapers/2012/08/30/12087/3574f899daef41d2f145eba13ff7840f.jpg');
  background-size:100% 100%;
  background-attachment: fixed; 
  background-repeat:no-repeat;
  font-family: 'Open Sans', sans-serif;
  padding-bottom: 40px;
}
.auth h1{
  color:#fff!important;
  font-weight:300;
  font-family: 'Open Sans', sans-serif;
}
.auth h1 span{
  font-size:21px;
  display:block;
  padding-top: 20px;
}
.auth .auth-box legend{
  color:#fff;
  border:none;
  font-weight:300;
  font-size:24px;
}
.auth .auth-box{
  background-color:#fff;
  max-width:460px;
  margin:0 auto;
  border:1px solid rgba(255, 255, 255, 0.4);;
  background-color: rgba(255, 255, 255, 0.2);
  background: rgba(255, 255, 255, 0.2);
  margin-top:40px;
  -webkit-box-shadow: 0px 0px 30px 0px rgba(50, 50, 50, 0.32);
  -moz-box-shadow:    0px 0px 30px 0px rgba(50, 50, 50, 0.32);
  box-shadow:         0px 0px 30px 0px rgba(50, 50, 50, 0.32);
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  -webkit-transition: background 1s ease-in-out;
  -moz-transition: background 1s ease-in-out;
  -ms-transition: background 1s ease-in-out;
  -o-transition: background 1s ease-in-out;
  transition: background 1s ease-in-out;
}
@media(max-width:460px){
  .auth .auth-box{
   margin:0 10px;
 }
}

.auth .auth-box input::-webkit-input-placeholder { /* WebKit browsers */
  color:    #fff;
  font-weight:300;
}
.auth .auth-box input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
  color:    #fff;
  font-weight:300;
}
.auth .auth-box input::-moz-placeholder { /* Mozilla Firefox 19+ */
  color:    #fff;
  font-weight:300;
}
.auth .auth-box input:-ms-input-placeholder { /* Internet Explorer 10+ */
  color:    #fff;
  font-weight:300;
}
.auth span.input-group-addon,
.input-group-btn button{
  border:none;
  background: #fff!important;
  color:#000!important;
}
.auth form{
    font-weight:300!important;
}
.auth form input[type="text"],
.auth form input[type="password"],
.auth form input[type="email"],
.auth form input[type="search"]{
  border:none;
  padding:10px 0 10px 0;
  background-color: rgba(255, 255, 255, 0)!important;
  background: rgba(255, 255, 255, 0);
  color:#fff;
  font-size:16px;
  border-bottom:1px dotted #fff;
  border-radius:0;
  box-shadow:none!important;
  height:auto;
}
.auth textarea{
  background-color: rgba(255, 255, 255, 0)!important;
  color:#fff!important;
}
.auth input[type="file"] {
  color:#fff;
}
.auth form label{
    color:#fff;
    font-size:21px;
    font-weight:300;
}
/*for radios & checkbox labels*/
.auth .radio label,
.auth label.radio-inline,
.auth .checkbox label,
.auth label.checkbox-inline{
    font-size: 14px;    
}

.auth form .help-block{
    color:#fff;
}
.auth form select{
  background-color: rgba(255, 255, 255, 0)!important;
  background: rgba(255, 255, 255, 0);
  color:#fff!important;
  border-bottom:1px solid #fff!important;
  border-radius:0;
  box-shadow:none;
}
.auth form select option{
    color:#000;
}
/*multiple select*/
.auth select[multiple] option, 
.auth select[size] {
  color:#fff!important;
}

/*Form buttons*/
.auth form .btn{
  background:none;
  -webkit-transition: background 0.2s ease-in-out;
  -moz-transition: background 0.2s ease-in-out;
  -ms-transition: background 0.2s ease-in-out;
  -o-transition: background 0.2s ease-in-out;
  transition: background 0.2s ease-in-out;
}
.auth form .btn-default{
    color:#fff;
    border-color:#fff;
}
.auth form .btn-default:hover{
    background:rgba(225, 225, 225, 0.3);
  color:#fff;
  border-color:#fff;
}
.auth form .btn-primary:hover{
    background:rgba(66, 139, 202, 0.3);
}
.auth form .btn-success:hover{
    background:rgba(92, 184, 92, 0.3);
}
.auth form .btn-info :hover{
    background:rgba(91, 192, 222, 0.3);
}
.auth form .btn-warning:hover{
    background:rgba(240, 173, 78, 0.3);
}
.auth form .btn-danger:hover{
    background:rgba(217, 83, 79, 0.3);
}
.auth form .btn-link{
  border:none;
  color:#fff;
  padding-left:0;
}
.auth form .btn-link:hover{
  background:none;
}


.auth label.label-floatlabel {
  font-weight: 300;
  font-size: 11px;
  color:#fff;
  left:0!important;
  top: 1px!important;
}
</style>
<script type="text/javascript">
(function(e,t,n,r){function o(t,n){this.$element=e(t);this.settings=e.extend({},s,n);this.init()}var i="floatlabel",s={slideInput:true,labelStartTop:"20px",labelEndTop:"10px",transitionDuration:.3,transitionEasing:"ease-in-out",labelClass:"",typeMatches:/text|password|email|number|search|url/};o.prototype={init:function(){var e=this;var n={"-webkit-transition":"all "+this.settings.transitionDuration+"s "+this.settings.transitionEasing,"-moz-transition":"all "+this.settings.transitionDuration+"s "+this.settings.transitionEasing,"-o-transition":"all "+this.settings.transitionDuration+"s "+this.settings.transitionEasing,"-ms-transition":"all "+this.settings.transitionDuration+"s "+this.settings.transitionEasing,transition:"all "+this.settings.transitionDuration+"s "+this.settings.transitionEasing};if(this.$element.prop("tagName").toUpperCase()!=="INPUT"){return}if(!this.settings.typeMatches.test(this.$element.attr("type"))){return}var r=this.$element.attr("id");if(!r){r=Math.floor(Math.random()*100)+1;this.$element.attr("id",r)}var i=this.$element.attr("placeholder");var s=this.$element.data("label");var o=this.$element.data("class");if(!o){o=""}if(!i||i===""){i="You forgot to add placeholder attribute!"}if(!s||s===""){s=i}this.inputPaddingTop=parseFloat(this.$element.css("padding-top"))+10;this.$element.wrap('<div class="floatlabel-wrapper" style="position:relative"></div>');this.$element.before('<label for="'+r+'" class="label-floatlabel '+this.settings.labelClass+" "+o+'">'+s+"</label>");this.$label=this.$element.prev("label");this.$label.css({position:"absolute",top:this.settings.labelStartTop,left:this.$element.css("padding-left"),display:"none","-moz-opacity":"0","-khtml-opacity":"0","-webkit-opacity":"0",opacity:"0"});if(!this.settings.slideInput){this.$element.css({"padding-top":this.inputPaddingTop})}this.$element.on("keyup blur change",function(t){e.checkValue(t)});t.setTimeout(function(){e.$label.css(n);e.$element.css(n)},100);this.checkValue()},checkValue:function(e){if(e){var t=e.keyCode||e.which;if(t===9){return}}var n=this.$element.data("flout");if(this.$element.val()!==""){this.$element.data("flout","1")}if(this.$element.val()===""){this.$element.data("flout","0")}if(this.$element.data("flout")==="1"&&n!=="1"){this.showLabel()}if(this.$element.data("flout")==="0"&&n!=="0"){this.hideLabel()}},showLabel:function(){var e=this;e.$label.css({display:"block"});t.setTimeout(function(){e.$label.css({top:e.settings.labelEndTop,"-moz-opacity":"1","-khtml-opacity":"1","-webkit-opacity":"1",opacity:"1"});if(e.settings.slideInput){e.$element.css({"padding-top":e.inputPaddingTop})}},50)},hideLabel:function(){var e=this;e.$label.css({top:e.settings.labelStartTop,"-moz-opacity":"0","-khtml-opacity":"0","-webkit-opacity":"0",opacity:"0"});if(e.settings.slideInput){e.$element.css({"padding-top":parseFloat(e.inputPaddingTop)-10})}t.setTimeout(function(){e.$label.css({display:"none"})},e.settings.transitionDuration*1e3)}};e.fn[i]=function(t){return this.each(function(){if(!e.data(this,"plugin_"+i)){e.data(this,"plugin_"+i,new o(this,t))}})}})(jQuery,window,document)

$(document).ready(function(){
  //Floatlabel
  $('input').floatlabel();
  $('a, button').click(function(e){
    e.preventDefault();
  });
});
</script>
<div class="container auth">
    <div id="big-form" class="well auth-box">
      <form>
        <fieldset>
          <!-- Textarea -->
          <div class="form-group">
            <label class=" control-label" for="textarea">Post</label>
            <div class="">                     
              <textarea class="form-control" id="textarea" name="textarea" rows="6" cols="120" >Your post here!</textarea>
            </div>
          </div>
          <div class="form-group">
            <br/>
            <div class="">
              <button id="singlebutton" name="singlebutton" class="btn btn-default">Post</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
    <div class="clearfix"></div>
  </div>