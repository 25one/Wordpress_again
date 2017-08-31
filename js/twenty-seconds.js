jQuery(document).ready(function() {
jQuery("body").on("click", "#twenty_seconds", function() {cron.twentyseconds(this.getAttribute("name"));});
});

var cron={

   twentyseconds: function(patch_name) {
      var ajaxSettings = {
          method: "GET",
          data: "twentyseconts",
          url: patch_name+"/twentyseconds.php",
          success: function(data) {
              alert(data);
          }
      };
      jQuery.ajax(ajaxSettings);
   },

}