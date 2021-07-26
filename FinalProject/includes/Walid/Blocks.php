<script>
Blockly.Blocks['selectstudents'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Select")
        .appendField(new Blockly.FieldTextInput("*"), "Column")
        .appendField(new Blockly.FieldLabelSerializable("From table students where"), "NAME")
        .appendField(new Blockly.FieldTextInput("id=1"), "Condition");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
Blockly.JavaScript['selectstudents'] = function(block) {
  var text_column = block.getFieldValue('Column');
  var text_condition = block.getFieldValue('Condition');
  // TODO: Assemble JavaScript into code variable.
  var code = "selects("+text_column+","+text_condition+")"+"\n";
  return code;
};
Blockly.Blocks['SelectZoo'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Select")
        .appendField(new Blockly.FieldTextInput("*"), "Column")
        .appendField("From")
        .appendField("Zoo")
        .appendField("Where")
        .appendField(new Blockly.FieldTextInput(""), "Condition");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
Blockly.JavaScript['SelectZoo'] = function(block) {
  var text_column = block.getFieldValue('Column');
  var text_condition= block.getFieldValue('Condition');
  // TODO: Assemble JavaScript into code variable.
  var code = "SelectFromZoo("+text_column+","+text_condition+")"+"\n";
  return code;
};

</script>