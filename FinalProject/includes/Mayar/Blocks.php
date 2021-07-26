<script>
Blockly.Blocks['CreateTableZoo'] = {
init: function() {
  this.appendDummyInput()
      .setAlign(Blockly.ALIGN_CENTRE)
      .appendField("CreateTableZoo");
  this.setPreviousStatement(false, null);
  this.setNextStatement(true, null);
  this.setColour(180);
this.setTooltip("");
this.setHelpUrl("");
}
};
Blockly.JavaScript['CreateTableZoo'] = function(block) {
// TODO: Assemble JavaScript into code variable.
var code = 'CreateTableZoo();\n';
return code;
};


Blockly.Blocks['CreateTableStudent'] = {
init: function() {
  this.appendDummyInput()
      .setAlign(Blockly.ALIGN_CENTRE)
      .appendField("CreateTableStudent");
  this.setPreviousStatement(false, null);
  this.setNextStatement(true, null);
  this.setColour(180);
this.setTooltip("");
this.setHelpUrl("");
}
};
Blockly.JavaScript['CreateTableStudent'] = function(block) {
// TODO: Assemble JavaScript into code variable.
var code = 'CreateTableStudent();\n';
return code;
};
</script>