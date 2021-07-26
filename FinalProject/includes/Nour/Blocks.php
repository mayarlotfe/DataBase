<script>
Blockly.Blocks['insertstudent'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Insert into Student values")
        .appendField(new Blockly.FieldLabelSerializable("Name"), "N")
        .appendField(new Blockly.FieldTextInput("name"), "NAME")
        .appendField(new Blockly.FieldLabelSerializable("Age"), "A")
        .appendField(new Blockly.FieldNumber(0), "age")
        .appendField(new Blockly.FieldLabelSerializable("Class"), "C")
        .appendField(new Blockly.FieldNumber(0), "Class")
        .appendField(new Blockly.FieldLabelSerializable("Year"), "Y")
        .appendField(new Blockly.FieldNumber(0), "Year");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
Blockly.JavaScript['insertstudent'] = function(block) {
  var text_name = block.getFieldValue('NAME');
  var number_age = block.getFieldValue('age');
  var number_class = block.getFieldValue('Class');
  var number_year = block.getFieldValue('Year');
  // TODO: Assemble JavaScript into code variable.
  var code = "insertintostudents("+text_name+","+number_age+","+number_class+","+number_year+")"+"\n";
  return code;
};

Blockly.Blocks['insertzoo'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Insert into Zoo values")
        .appendField(new Blockly.FieldLabelSerializable("Name"), "N")
        .appendField(new Blockly.FieldTextInput("name"), "NAME")
        .appendField(new Blockly.FieldLabelSerializable("Age"), "A")
        .appendField(new Blockly.FieldNumber(0), "age")
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
Blockly.JavaScript['insertzoo'] = function(block) {
  var text_name = block.getFieldValue('NAME');
  var number_age = block.getFieldValue('age');
  // TODO: Assemble JavaScript into code variable.
  var code = "insertintozoo("+text_name+","+number_age+")"+"\n";
  return code;
};
</script>