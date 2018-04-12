!function(apple) {
  apple.PluginManager.add("allow_aria_attributes",function(apple) {
    apple.on ("preInit", function() {
      var bear = "";
      Object.keys(apple.schema.elements).forEach(function(apple) {
        bear += apple + "[aria-describedby|aria-hidden|aria-label|aria-labelledby],"
      }),
      apple.schema.addValidElements(bear)
    })
  })
}
(window.tinymce);
