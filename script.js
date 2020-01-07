$(window).ready(init);

function init() {

  getConfig();
  $("#myForm").submit(putNewConfig);
  $("#updateForm").submit(updateConfig);
  $("#deleteForm").submit(deleteConfig);

}

function putNewConfig() {

  var me = $(this);
  $.ajax({

    url: "putNewConfig.php",
    method: "POST",
    data: me.serialize(),
    success: function(data) {

      if(data) {
        getConfig();
      }
    },
    error: function(error) {

      console.log("error", error);
    }
  });

  return false;
}

function getConfig() {

  $.ajax({

    url: 'getConfigurazioni.php',
    method: 'GET',
    success: function(data) {
      printConfig(data);
    },
    error: function(error) {

      console.log("error", error);
    }
  });
}

function updateConfig () {
  var me = $(this);
  $.ajax({

    url: "updateConfig.php",
    method: "POST",
    data: me.serialize(),
    success: function(data) {
      console.log(data);
      
      if(data) {
        getConfig();
      }
    },
    error: function(error) {
      console.log("error", error);
    }
  });

  return false;
}

function deleteConfig () {
  var me = $(this);
  $.ajax({

    url: "deleteConfig.php",
    method: "POST",
    data: me.serialize(),
    success: function(data) {
      console.log(data);
      if(data) {
        getConfig();
      }
    },
    error: function(error) {
      console.log("error", error);
    }
  });

  return false;
}

function printConfig(data) {

  targetReset();

  var target = $("#container");

  var template = $("#printConf").html();
  var compiled = Handlebars.compile(template);

  for (var i=0;i<data.length;i++) {

    var configurazione = data[i];

    var configHTML = compiled(configurazione);

    target.append(configHTML);
  }
}

function targetReset() {
  var target = $("#container");
  target.html('');
}





