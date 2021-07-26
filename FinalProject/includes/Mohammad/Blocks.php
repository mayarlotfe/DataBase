<script>
Blockly.Blocks['deletestudents'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Delete")
        .appendField("From")
        .appendField("students")
        .appendField("Where")
        .appendField(new Blockly.FieldTextInput(""), "Column")
        .appendField("=")
        .appendField(new Blockly.FieldTextInput(""), "Condition");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(360);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
Blockly.JavaScript['deletestudents'] = function(block) {
  var text_column = block.getFieldValue('Column');
  var text_condition = block.getFieldValue('Condition');
  var code = "deletefromstudents("+text_column+","+text_condition+")"+"\n";
  console.log(text_column);
  console.log(code);

  return code;
};

Blockly.Blocks['DeleteZoo'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Delete")
        .appendField("From")
        .appendField("zoo")
        .appendField("Where")
        .appendField(new Blockly.FieldTextInput(""), "Column")
        .appendField("=")
        .appendField(new Blockly.FieldTextInput(""), "Condition");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(360);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
Blockly.JavaScript['DeleteZoo'] = function(block) {
  var text_column = block.getFieldValue('Column');
  var text_condition= block.getFieldValue('Condition');
  var code = "DeleteFromZoo("+text_column+","+text_condition+")"+"\n";
  return code;
};


Blockly.Blocks['DeleteZooAll'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Tranquate")
        .appendField("zoo")
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(25);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
Blockly.JavaScript['DeleteZooAll'] = function(block) {
  var code = "deleteallzoo(a,b)"+"\n";
  return code;
};

Blockly.Blocks['DeleteStudentsAll'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Tranquate")
        .appendField("students")
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(25);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
Blockly.JavaScript['DeleteStudentsAll'] = function(block) {
  var code = "deleteallstudents(a,b)"+"\n";
  return code;
};

</script>