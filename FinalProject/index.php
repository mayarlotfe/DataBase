<!Doctype Html>
<Html>   
<Head> 
  <link rel="stylesheet" href="styles/level1.css">
  <style>
  table, th, td {
  border: 1px solid black;
}
  </style>

<style>
h1 {text-align: center;}

</style>
<h1 style="color:rgb(24, 24, 24)(240, 236, 236);font-size:80px;">SQL</h1> 
<style>
  .container {
    height: 50px;
    width: 50px;
    position: relative;
    border: 3px solid green;
  }
  
  .vertical-center {
    height: 50px;
    width: 50px;
    margin: 0;
    position: absolute;
    top: 15%;
    -ms-transform: translateY(-25%);
    transform: translateX(-77%);
  }
  </style>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/submit.js"></script>
  <div class="container">
    <div class="vertical-center">
      <button  class="button1" onclick="ShowTextualAndRun()"> Run</button> 
    </div>
  </div>

<Body background="bb.jpg"> 
<!--add blockly scripts-->
    
<script src="blockly/blockly_compressed.js"></script>
<script src="blockly/blocks_compressed.js"></script>
<script src="blockly/msg/js/en.js"></script>
<script src="blockly/javascript_compressed.js"></script>
</Head>
<body>
  <script>
    function execute(s){
    var code = s.split("\n");
    
    for(var i = 0 ; i<code.length ; i++){
      var temp = code[i];
   //   console.log("skdlajdlsajdlajsdlsaj");

      console.log(temp)
        switch(temp){
            case 'CreateTableStudent();':
                GenerateTableStudent();
                break;

            case 'CreateTableZoo();':
                GenerateTableZoo();
                break;

            case 'DropTableStudent();':
                DropTableStudent();
                break;

            case 'DropTableZoo();':
                DropTableZoo();
                break;
                
        }
		var temp=code[i].substring(0,code[i].length-1);
		if(temp.includes("insertintostudents")){
			var arr =(temp.substring(19,temp.length)).split(",")
			 insertTableStudents(arr[0],arr[1],arr[2],arr[3]);
		
		}
		if(temp.includes("insertintozoo")){
			var arr =(temp.substring(14,temp.length)).split(",")
			 insertTableZoo(arr[0],arr[1]);
		
		}
		if(temp.includes("selects")){
			var arr =(temp.substring(8,temp.length)).split(",")
			 selectSTable(arr[0],arr[1],"students");	
		}
		if(temp.includes("SelectFromZoo")){
			var arr =(temp.substring(14,temp.length)).split(",")
			 selectTable(arr[0],arr[1],"zoo");
		
		}
    if(temp.includes("deletefromstudents")){
			var arr =(temp.substring(19,temp.length)).split(",")
			 deleteTable(arr[0],arr[1],"students");
		
		}
    if(temp.includes("DeleteFromZoo")){
			var arr =(temp.substring(14,temp.length)).split(",")
			 deleteTable(arr[0],arr[1],"zoo");
		
		}
    if(temp.includes("deleteallzoo")){
      
      tranqTable("a","b","z");
		
		}
    if(temp.includes("deleteallstudents")){
      
      tranqTable("a","b","s");
		
		}
		
	}
	}
</script>
<?php include('includes/Walid/Functions-js.php')?>
<?php include('includes/Mayar/Functions-js.php')?>
<?php include('includes/Nour/Functions-js.php')?>
<?php include('includes/Mohammad/Functions-js.php')?>
<?php include('includes/Karim/Functions-js.php')?>


<?php include('includes/Walid/Blocks.php')?>
<?php include('includes/Mayar/Blocks.php')?>
<?php include('includes/Nour/Blocks.php')?>
<?php include('includes/Mohammad/Blocks.php')?>
<?php include('includes/Karim/Blocks.php')?>











<script>

function ShowTextualAndRun() {
      Blockly.JavaScript.addReservedWords('code');
      var code = Blockly.JavaScript.workspaceToCode();
      finalCode= code;
      console.log(code);
      execute(code);
     
    }
    </script>   
    



<!--all available blocks-->
  <div class="blockly-container" id="blocklyDiv" >
    <xml id="toolbox" style="display: none">
      
        <category name="SQL_Operations"colour="150">
          <block type="CreateTableZoo"></block>
          <block type="CreateTableStudent"></block>
          <block type="DropTableZoo"></block>
          <block type="DropTableStudent"></block>
		  <block type="insertstudent"></block>
		  <block type="insertzoo"></block>			
		  <block type="SelectZoo"></block>		  		  
		  <block type="selectstudents"></block>	
      <block type="deletestudents"></block>		
      <block type="DeleteZoo"></block>	
      <block type="DeleteZooAll"></block>	
      <block type="DeleteStudentsAll"></block>		
	
      	  
		  
        </category>
    </xml>
  </div>

  <!--ends here -->
    <!--textual mapping-->
<div class="textual-code-container">
    
      
    <div id="dvTable"></div>

    

     
<!--button script-->
  
<script>
  // sequential level code 
  // gets the textual mapping of the written code
  function runJS() {
    Blockly.JavaScript.addReservedWords('code');
    var code = Blockly.JavaScript.workspaceToCode();

    document.getElementById("textual-code-paragraph").innerHTML = code;
    execute(code);
    finalCode= code;
    
    try {
    } catch (e) {
    //  alert(e);
    }
  }
</script>
<!--ends here-->

    <!--the blockly blocks script should be at the end--> 
    <script>
      var workspace = Blockly.inject('blocklyDiv',
          {toolbox: document.getElementById('toolbox')});
    </script>
    <!--ends here-->
</body>
</html>

