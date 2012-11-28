


function Point (x, y) {
    this.x = x;
    this.y = y;
}

function AbstractPiece(the_color, the_rotations){
    this.my_color = the_color;
    this.my_rotations = the_rotations;
    this.my_current_rotation = 0;
    this.my_origin = new Point(0,0);
};

//***ABSTRACT PIECE METHODS ****////
// Add methods like this.  All Piece objects will be able to invoke this

//GET ROTATIONS
AbstractPiece.prototype.getRotations = function(){
    return this.my_rotations;
}

//GET THE PIECES BLOCKS
AbstractPiece.prototype.getBlocks = function(){
    return this.my_rotations[this.my_current_rotation];
}

//GET THE PIECE ORIGIN
AbstractPiece.prototype.getOrigin = function(){
    return this.my_origin;
}

//GET THE PIECE ORIGIN X-COORD
AbstractPiece.prototype.getX = function(){
    return this.my_origin.x;
}

//GET THE PIECE ORIGIN Y-COORD
AbstractPiece.prototype.getY = function(){
    return this.my_origin.y;
}

//GET THE PIECE color
AbstractPiece.prototype.getColor = function(){
    return this.my_color;
}

//GET THE PIECE Absolute Position
AbstractPiece.prototype.absolutePosition = function(the_index){
    
    var temp  = this.getBlocks();
    var x = this.my_origin.x + temp[the_index].x;
    var y = this.my_origin.y + temp[the_index].y;
               
    return new Point(x,y);
}


//Move a Piece Left
AbstractPiece.prototype.moveLeft = function(){

     var result = jQuery.extend(true, {}, this);
     result.my_origin = new Point(this.my_origin.x - 1, this.my_origin.y);
        
    return result;
}

//Move a Piece Left
AbstractPiece.prototype.moveRight = function(){

     var result = jQuery.extend(true, {}, this);
     result.my_origin = new Point(this.my_origin.x + 1, this.my_origin.y);
        
    return result;
}

//Move a Piece Left
AbstractPiece.prototype.moveDown = function(){

     var result = jQuery.extend(true, {}, this);
     result.my_origin = new Point(this.my_origin.x, this.my_origin.y - 1);
        
    return result;
}

//Move a Piece Left
AbstractPiece.prototype.rotate = function(){

     var result = jQuery.extend(true, {}, this);
     result.my_current_rotation = (this.my_current_rotation + 1) % this.my_rotations.length;
    return result;
}

//Move a Piece Left
AbstractPiece.prototype.setOrigin= function(the_origin){

     var result = jQuery.extend(true, {}, this);
     result.my_origin = the_origin;
    return result;
}

//Checks to see if two PIECES ARE EQUAL (by color)
AbstractPiece.prototype.equals= function(the_other){

   return the_other.my_color === this.my_color;
}

//Checks to see if two PIECES ARE EQUAL (by color)
AbstractPiece.prototype.toString= function(){
var piece = "";

var found = false;
 for (var y = 3; 0 <= y; y--) 
    {
      found = false;
      for (var x = 0; x < 4; x++) 
      {
        for (var i = 0; i < 4; i++) 
        {
          var temp = this.getBlocks();
          var pos = new Point(temp[i].x, temp[i].y);
          
          if (pos.x === x && pos.y === y) 
          {
            piece+=("[]");
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
}
    
   
//** TETRIS PIECES ******************//



function OPiece (){ 
    
    return new AbstractPiece("Yellow", [[new Point(1, 1), new Point(1, 2), new Point(2, 1), new Point(2, 2)]]);

};

function IPiece () {
    return new AbstractPiece("Purple", [
    [new Point(0, 1), new Point(1, 1),new Point(2, 1), new Point(3, 1)],
    [new Point(2, 3), new Point(2, 2),new Point(2, 1), new Point(2, 0)]]);
};
              
function SPiece (){
    return new AbstractPiece("Green", [
    [new Point(0, 0), new Point(1, 0), new Point(1, 1), new Point(2, 1)],
    [new Point(1, 2), new Point(1, 1),new Point(2, 1), new Point(2, 0)]]);
};

function ZPiece (){
    return new AbstractPiece("Red", [
    [new Point(0, 1), new Point(1, 1), new Point(1, 0), new Point(2, 0)],
    [new Point(1, 0), new Point(1, 1), new Point(2, 1), new Point(2, 2)]]);
};
              
function JPiece () {
    return new AbstractPiece("Blue", [
    [new Point(0, 0), new Point(1, 0),new Point(1, 1), new Point(1, 2)],
    [new Point(0, 2), new Point(0, 1),new Point(1, 1), new Point(2, 1)],
    [new Point(1, 0), new Point(1, 1),new Point(1, 2), new Point(2, 2)],
    [new Point(0, 1), new Point(1, 1),new Point(2, 1), new Point(2, 0)]]);
}; 
                                    
function LPiece (){
    return new AbstractPiece("Orange", [
    [new Point(1, 2), new Point(1, 1),new Point(1, 0), new Point(2, 0)],
    [new Point(0, 0), new Point(0, 1), new Point(1, 1), new Point(2, 1)],
    [new Point(0, 2), new Point(1, 2), new Point(1, 1), new Point(1, 0)],
    [new Point(0, 1), new Point(1, 1), new Point(2, 1), new Point(2, 2)]]);
};


function TPiece (){
    return new AbstractPiece("Magenta", [
    [new Point(0, 1), new Point(1, 1), new Point(2, 1), new Point(1, 0)],
    [new Point(1, 2), new Point(1, 1), new Point(1, 0), new Point(0, 1)],
    [new Point(0, 1), new Point(1, 1), new Point(2, 1), new Point(1, 2)],
    [new Point(1, 2), new Point(1, 1), new Point(1, 0), new Point(2, 1)]]);
};


//
//function Parenizor(value) {
//    this.setValue(value);
//}
//
//Function.prototype.method = function (name, func) {
//    this.prototype[name] = func;
//    return this;
//};
//
//Parenizor.method('setValue', function (value) {
//    this.value = value;
//    return this;
//});
//
//var par = new Parenizor(3);/* 


