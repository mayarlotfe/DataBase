<script>
Blockly.Blocks['DropTableZoo'] = {
init: function() {
  this.appendDummyInput()
      .setAlign(Blockly.ALIGN_CENTRE)
      .appendField("DropTableZoo");
  this.setPreviousStatement(true, null);
  this.setNextStatement(true, null);
  this.setColour(180);
this.setTooltip("");
this.setHelpUrl("");
}
};
Blockly.JavaScript['DropTableZoo'] = function(block) {
// TODO: Assemble JavaScript into code variable.
var code = 'DropTableZoo();\n';
return code;
};


Blockly.Blocks['DropTableStudent'] = {
init: function() {
  this.appendDummyInput()
      .setAlign(Blockly.ALIGN_CENTRE)
      .appendField("DropTableStudent");
  this.setPreviousStatement(true, null);
  this.setNextStatement(true, null);
  this.setColour(180);
this.setTooltip("");
this.setHelpUrl("");
}
};
Blockly.JavaScript['DropTableStudent'] = function(block) {
// TODO: Assemble JavaScript into code variable.
var code = 'DropTableStudent();\n';
return code;
};
</script>