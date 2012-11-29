
<!--col2 start--><div class="col2" style="background-color:white;padding-bottom:150px;border:1px solid black;">
    <h2 style="margin:auto;display:block;width:50px;margin-top:10px;font-size:18px;">TETRIS</h2>
<!--                            <div class="demos">
                                    
                                    <div class="demo">
                                        <a href="#">
                                            <img style="" src="../images/standard1.png" alt="Standard" />
                                            <div class="title">Pierce County App</div>
                                        </a>
                                    </div>
                                    
                                    <div class="demo">
                                        <a href="#">
                                            <img style="" src="../images/standard1.png" alt="Standard" />
                                            <div class="title">Pierce County App</div>
                                        </a>
                                    </div>
                                    
                                    <div class="demo">
                                        <a href="#">
                                            <img style="" src="../images/standard1.png" alt="Standard" />
                                            <div class="title">Pierce County App</div>
                                        </a>
                                    </div>     
                                
                                    <div class="demo">
                                        <a href="#">
                                            <img style="" src="../images/standard1.png" alt="Standard" />
                                            <div class="title">Pierce County App</div>
                                        </a>
                                    </div>                                    
                                
                                    <div class="demo">
                                        <a href="#">
                                            <img style="" src="../images/standard1.png" alt="Standard" />
                                            <div class="title">Pierce County App</div>
                                        </a>
                                    </div>
                                    
                           </div>-->

 <div style="width:300px;float:left;position:relative;left:50px;">
     <div style="padding:0 5px 5px 5px;text-align:center;background-color:gray;">
         <p style="margin-top:40px; padding-top:20px; font-size:30px;">Game Players</p>
         <div style="height:80px;border: 1px solid black;margin:1px;">
             <div style="float:left;height:100%;background-color:red;width:20%;line-height: 4;">1st</div>
             <div style="float:right;height:100%;background-color:green;width:80%;line-height: 4;">player</div>
         </div>
         
         <div style="height:80px;border: 1px solid black;margin:1px;">
             <div style="float:left;height:100%;background-color:red;width:20%;line-height: 4;">2nd</div>
             <div style="float:right;height:100%;background-color:green;width:80%;line-height: 4;">player</div>
         </div>
         
         <div style="height:80px;border: 1px solid black;margin:1px;">
             <div style="float:left;height:100%;background-color:red;width:20%;line-height: 4;">3rd</div>
             <div style="float:right;height:100%;background-color:green;width:80%;line-height: 4;">player</div>
         </div>
         
         <div style="height:80px;border: 1px solid black;margin:1px;">
             <div style="float:left;height:100%;background-color:red;width:20%;line-height: 4;">4th</div>
             <div style="float:right;height:100%;background-color:green;width:80%;line-height: 4;">player</div>
         </div>
         
     </div>

 </div>
<div style="width:300px;height:500px;float:right;position:relative;right:50px;">
    
     <div style="height:210px;text-align:center;background-color:black;">
         <p style="margin-top:40px;padding-top:20px;color:white; ">next piece</p>
         <canvas id="myNextCanvas" width="80" height="100" style="border:1px solid black;background-color:black;">
        Your browser does not support the HTML5 canvas tag.
        </canvas>
     </div>
     <div style="text-align:center;height:270px;background-color:gray;">
         <p style="margin-top:20px;padding-top:10px;font-size:26px; ">score board</p>
         <ul style="width:100%;height:100%;">
             <li style="width:99%;margin:auto;border:1px solid;height:20%;margin-top:2px;">
                 <div style="display:inline-block;width:48%;line-height:3;">Score</div>
                 <div id="myScore" style="display:inline-block;width:48%;line-height:3;">00000</div>
             </li>
             <li style="width:99%;margin:auto;border:1px solid;height:20%;margin-top:2px;">
                 <div style="display:inline-block;width:48%;line-height:3;">Lines</div>
                 <div id="myLines" style="display:inline-block;width:48%;line-height:3;">00</div>
             </li>
             <li style="width:99%;margin:auto;border:1px solid;height:20%;margin-top:2px;">
                 <div style="display:inline-block;width:48%;line-height:3;">Level</div>
                 <div id="myLevel" style="display:inline-block;width:48%;line-height:3;">00</div>
             </li>
         </ul>
             
         
     </div>
 
 </div>
<script src="<?=$url?>js/tetris/pieces.js"></script>
 <div style="margin:auto;width:200px;height:400px;box-shadow: 3px 8px 12px rgba(0, 0, 0, .5);margin-top:50px;">
<canvas id="myCanvas" width="200" height="400" style="border:1px solid black;background-color:white;">
Your browser does not support the HTML5 canvas tag.
</canvas>
 </div>


<script>




function Board (){
    this.my_timer = 0;
    this.next_piece_flag = 0;
    this.my_current_level = 0;
    this.my_current_lines = 0;
    this.my_current_score = 0;
    this.my_width = 10;
    this.my_height = 24;
    this.my_last_lines_removed = 0;
    this.my_last_blocks_placed = 0;
    this.my_changed_flag = true;
    this.my_full_flag = false;
    this.my_next_piece = new OPiece();
    this.my_current_piece = new JPiece();
    this.my_row_list = [ new Array(10),new Array(10),new Array(10),new Array(10),new Array(10),
                         new Array(10),new Array(10),new Array(10),new Array(10),new Array(10),
                         new Array(10),new Array(10),new Array(10),new Array(10),new Array(10),
                         new Array(10),new Array(10),new Array(10),new Array(10),new Array(10),
                         new Array(10),new Array(10),new Array(10),new Array(10)];
this.myNextCanvas(); 
this.setTime(1000);
};

Board.prototype.setTime = function(the_amount){
    var self = this;
 // this.my_timer = setInterval(function(){self.moveDown();},the_amount);
};

//
//function myStopFunction()
//{
//clearTimeout(myVar);
//}

//gets the boards height
Board.prototype.getAnother = function(){
this.next_piece_flag++;
   switch(this.next_piece_flag % 7) {
       
        case 0: 
            return new LPiece();
        break;
        
        case 1: 
            return new OPiece();
        break;

        case 2: 
            return new JPiece();
        break;

        case 3: 
            return new SPiece();
        break;

        case 4: 
            return new TPiece();
        break;
        
        case 5: 
            return new ZPiece();
        break;
        
        case 6: 
            return new IPiece();
        break;

        default: return; // exit this handler for other keys
   
   }
   
};

//gets the boards height
Board.prototype.getHeight= function(){

   return this.my_height;
};

//gets the boards width
Board.prototype.getWidth= function(){

   return this.my_width;
};

//returns a specific row from the board
Board.prototype.getRowAt = function(the_y){

   var result = this.my_row_list[the_y].slice();
   return result;
};

//checks to see if row is empty
Board.prototype.isRowEmpty = function(the_y){

   var result = true;
   
    for (var i = 0; i < 4; i++) 
    {
      result = result && !(this.my_current_piece.absolutePosition(i).y == the_y);
    }
    for (var x = 0; x < 10; x++) 
    {
      result = result && this.getRowAt(the_y)[x] == undefined;
    }
   return result;
};


//checks to see if row is full
Board.prototype.isRowFull = function(the_y){

    var row = this.getRowAt(the_y);
    for (var i = 0; i < 4; i++) 
    {
       var p = new Point(this.my_current_piece.absolutePosition(i));
      if (p.y == the_y) 
      {
        row[p.x] = this.my_current_piece.my_color;
      }
    }
    result = true;
    for (var x = 0; x < 10; x++) 
    {
      result = result && row[x] != undefined;
    }
   return result;
};


//checks to see if row is full
Board.prototype.isFrozenRowFull = function(the_y){

    var row = this.getRowAt(the_y);
    result = true;
    
    for (var x = 0; x < 10; x++) 
    {
      result = result && row[x] != undefined;
    }
    
    return result;
};


//gets color
Board.prototype.getColor = function(the_point){

    var result = this.getRowAt(the_point.y)[the_point.x];
    if (result == undefined) 
    {
           // see if the current piece has a block there
      for (var i = 0; i < 4 && (result == undefined); i++) 
      {
        var p = this.my_current_piece.absolutePosition(i);
        
        if (p.x === the_point.x && p.y === the_point.y)
        {
          result = this.my_current_piece.my_color;
        }
      }
    }
    
     return result;
};

  /**
   * @return How many lines were removed as a result of the last action?
   */
Board.prototype.lastLinesRemoved = function(){

    return this.my_last_lines_removed;
}

  /**
   * @return How many blocks were placed as a result of the last action?
   */

Board.prototype.lastBlocksPlaced = function(){

    return this.my_last_blocks_placed;
}

  /**
   * @return Did the state of the board change as a result of the last action?
   */
Board.prototype.changed = function(){

     return this.my_changed_flag;
}

Board.prototype.currentPiece = function(){

     return this.my_current_piece;
}

Board.prototype.nextPiece = function(){

     return this.my_next_piece;
}

Board.prototype.isFull = function(){

     return this.my_full_flag;
}



Board.prototype.moveLeft = function(){

      this.my_last_lines_removed = 0;
      this.my_last_blocks_placed = 0;
      this.my_changed_flag = false;
      
     var moved = this.my_current_piece.moveLeft();
    if (!this.collides(moved)) 
    {
      this.my_current_piece = moved;
      this.my_changed_flag = true;

    }
}


Board.prototype.moveRight = function(){

    this.my_last_lines_removed = 0;
    this.my_last_blocks_placed = 0;
    this.my_changed_flag = false;
      
    var moved = this.my_current_piece.moveRight();
    if (!this.collides(moved)) 
    {
      this.my_current_piece = moved;
      this.my_changed_flag = true;
    }
    
}

  /**
   * Move the current piece down, if possible!
   */

Board.prototype.moveDown = function(){
    var moved = this.my_current_piece.moveDown();
    this.my_last_lines_removed = 0;
    if (this.collides(moved)) 
    {
      // freeze the current piece
      for (var i = 0; i < 4; i++) 
      {
         var p = this.my_current_piece.absolutePosition(i);
         this.my_row_list[p.y][p.x] = this.my_current_piece.my_color;
      }

      // clear all full rows
      this.clearFullRows();

      // check for end of game
      for (var y = this.my_height; !this.my_full_flag && y < this.my_row_list.length; y++) 
      {
        my_full_flag = this.isRowEmpty(y);
        my_full_flag ^= true; // bitwise inversion
      }

      // add empty rows at the top
      for (var i = 0; i < this.my_last_lines_removed; i++) 
      {
        this.my_row_list.push([10]);//this needs to redone using arrays
      }

      // replace the current piece with the next piece, and adjust
      // my_last_blocks_placed
      this.my_current_piece = this.my_next_piece;
      this.my_next_piece = this.getAnother();
      this.my_current_piece.my_origin  = new Point(5,20);
      this.myNextCanvas(); 
     // this.my_next_piece = this.my_piece_generator.next();
      this.my_last_blocks_placed = 4;
    } 
    else 
    {
      // we actually just move the piece down if it doesn't collide
      this.my_current_piece = moved;
      this.my_last_blocks_placed = 0;
    }
    this.toString();
    this.my_changed_flag = true;
  }


  /**
   * Rotate the current piece clockwise, if possible!
   */
  Board.prototype.rotateClockwise = function(the_piece){

    this.my_last_lines_removed = 0;
    this.my_last_blocks_placed = 0;
    this.my_changed_flag = false;
    var moved = this.my_current_piece.rotate();
    if (!this.collides(moved)) 
    {
      this.my_current_piece = moved;
      this.my_changed_flag = true;
    }
    
  }

  /**
   * @param the_piece The piece.
   * @return Does the_piece collide with the already-frozen pieces or
   * the boundaries of the board?
   */
Board.prototype.collides = function(the_piece){

     var result = false;
    for (var i = 0; !result && i < 4; i++) 
    {
      var block_pos = the_piece.absolutePosition(i);
      
      result = result || !this.isWithinBoard(block_pos);
      result = result || this.getRowAt(block_pos.y)[block_pos.x] != undefined;
    }
    return result;
};


  /**
   * @param the_point The point.
   * @return true if the specified point is within the boundaries of the board,
   * including the play area above the board, and false otherwise.
   */
Board.prototype.isWithinBoard = function(the_point){
    console.log(this.my_height);
    console.log(the_point.y);
        return 0 <= the_point.x && the_point.x < this.my_width &&
           0 <= the_point.y && the_point.y < this.my_height + 4;
};




Board.prototype.clearFullRows = function(){
    
    var found = false;
    var removed = 0;
    for(var i = this.my_row_list.length-1; i >= 0; i--){
           
            if (this.isFrozenRowFull(i)){

                var removeItem = this.my_row_list[i];
                
                this.my_row_list = jQuery.grep(this.my_row_list, function(value, i) {
                return value != removeItem;
                });
                this.my_row_list[23] = new Array(10);
                found = true;
                this.my_current_lines++;
                removed++;
                $('#myLines').html(this.my_current_lines);
                if(this.my_current_lines%5 === 0){
                    this.my_current_level++;
                    $("#myLevel").html(this.my_current_level);
                }
            }
            
        }
        if(found){
        console.log(this.toString());
            this.toString();
        }
        
        switch (removed){
        case 0:
            
            break;
        case 1:
            this.my_current_score+=10;
            break;
        case 2:
            this.my_current_score+=20;
            break;
        case 3:
            this.my_current_score+=30;
            break;
        case 4:
            this.my_current_score+=40;
            break;
        
        default: return;
        }
        
        $("#myScore").html(this.my_current_score);

};

Board.prototype.toString = function(){
    
var result  = "";

 for (var y = 20 - 1; 0 <= y; y--)
    {
      for (var x = 0; x < 10; x++)
      {
        var found = false;
        var row = this.getRowAt(y);

        if (row[x])
        {
          result += "[X]";
          found = true;
        }
        else
        {
          for (var i = 0; i < 4; i++)
          {
            var p = this.my_current_piece.absolutePosition(i);
            if (p.x == x && p.y == y)
            {
              result += "[X]";
              found = true;
            }
          }
        }

        if (!found)
        {
         result += "[ ]";
        }
      }

      result += "\n";
    }
    console.log(result);
    
    var c =document.getElementById("myCanvas");
    this.clearCanvasGrid(c);
    var ctx=c.getContext("2d");  
    
    for (var y = 20 - 1; y >= 0; y--)
    {
      for (var x = 0; x < 10; x++)
      {
        if (this.getRowAt(y)[x] != undefined)
        {
         
            ctx.beginPath();
            ctx.rect(x*20 ,(19-y)*20,20,20);
            ctx.fillStyle = this.getRowAt(y)[x];
            ctx.fill();
            ctx.lineWidth = 1;
            ctx.strokeStyle = 'black';
            ctx.stroke();

        }
      }

    }
    
    for (var i = 0; i < 4; i++)
    {
        
      var x = this.my_current_piece.absolutePosition(i).x;
      var y = this.my_current_piece.absolutePosition(i).y;

      if (this.getRowAt(y)[x] === undefined)
      {
        
        ctx.beginPath();
        ctx.rect(x*20 ,(19-y)*20,20,20);
        ctx.fillStyle = this.my_current_piece.my_color;
        ctx.fill();
        ctx.lineWidth = 1;
        ctx.strokeStyle = 'black';
        ctx.stroke();
      }

    }

};

Board.prototype.myNextCanvas = function(){

    var nc =document.getElementById("myNextCanvas");
    this.clearNextCanvasGrid(nc);
    var ctn= nc.getContext("2d");  
var piece = "";

var found = false;
 for (var y = 3; 0 <= y; y--) 
    {
      found = false;
      for (var x = 3; 0 <= x; x--) 
      {
        for (var i = 0; i < 4; i++) 
        {
          var temp = this.my_next_piece.absolutePosition(i);
          var pos = new Point(temp[i].x, temp[i].y);
          
          if (pos.x === x && pos.y === y) 
          {
            piece+=("[]");
            ctn.beginPath();
            ctn.rect(x*20,y*20,20,20);
            ctn.fillStyle = this.my_next_piece.my_color;
            ctn.fill();
            ctn.lineWidth = 1;
            ctn.strokeStyle = 'black';
            ctn.stroke();
            found = true;
          } 
        }
        if (!found)
        {
          piece+=("  ");
        }
      }
      piece+=('\n');
    }
    return piece;
  
//       
//      }

  //  }

};

Board.prototype.clearCanvasGrid = function(the_canvas){

     var canvas = document.getElementById("myCanvas"); //because we are looping //each location has its own canvas ID
            var context = canvas.getContext('2d');
            //context.beginPath();

            // Store the current transformation matrix
            context.save();

            // Use the identity matrix while clearing the canvas
            context.setTransform(1, 0, 0, 1, 0, 0);
            context.clearRect(0, 0, canvas.width, canvas.height);

            // Restore the transform
            context.restore(); //CLEARS THE SPECIFIC CANVAS COMPLETELY FOR NEW DRAWING

};

Board.prototype.clearNextCanvasGrid = function(the_canvas){

     var canvas = document.getElementById("myNextCanvas"); //because we are looping //each location has its own canvas ID
            var context = canvas.getContext('2d');
            //context.beginPath();

            // Store the current transformation matrix
            context.save();

            // Use the identity matrix while clearing the canvas
            context.setTransform(1, 0, 0, 1, 0, 0);
            context.clearRect(0, 0, canvas.width, canvas.height);

            // Restore the transform
            context.restore(); //CLEARS THE SPECIFIC CANVAS COMPLETELY FOR NEW DRAWING

};



var board = new Board();
board.my_current_piece.my_origin = new Point(5,20);
board.my_next_piece.my_origin = new Point(5,20);

$(document).keydown(function(e){

    switch(e.which) {
        case 37: 
            board.moveLeft();
            console.log(board.toString());
        break;

        case 38: // up
            board.rotateClockwise();
            console.log(board.toString());
        break;

        case 39: 
            board.moveRight();
            console.log(board.toString());
        break;

        case 40: 
            board.moveDown();
            console.log(board.toString());
        break;

        default: return; // exit this handler for other keys
    }
    e.preventDefault();
});




</script>

  <!--col2 end--></div>
 
<!--main end--></div>
