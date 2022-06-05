/*
    Write a class Block that creates a block (Duh..)

    ##Requirements

    The constructor should take an array as an argument, this will contain 3 integers of the form [width, length, height] from which the Block should be created.
    Define these methods:

    `getWidth()` return the width of the `Block`

    `getLength()` return the length of the `Block`

    `getHeight()` return the height of the `Block`

    `getVolume()` return the volume of the `Block`

    `getSurfaceArea()` return the surface area of the `Block`

    ##Examples
    
    Block b = new Block(new int[]{2,4,6}) -> creates a `Block` object with a width of `2` a length of `4` and a height of `6`
    b.getWidth() // -> 2
    
    b.getLength() // -> 4
    
    b.getHeight() // -> 6
    
    b.getVolume() // -> 48
    
    b.getSurfaceArea() // -> 88
*/

public class BuildingBlocks {
    private int width;
    private int length;
    private int height;
    private int volume;
    private int surfaceArea;
    
    public BuildingBlocks(int[] parameters) {
      this.width = parameters[0];
      this.length = parameters[1];
      this.height = parameters[2];
      
      this.volume = width * length * height;
      this.surfaceArea = 2 * (width * length + width * height + length * height);
    }
    
    public int getWidth() {
      return this.width;
    }
  
    public int getLength() {
      return this.length;
    }
  
    public int getHeight() {
      return this.height;
    }
  
    public int getVolume() {
      return this.volume;
    }
  
    public int getSurfaceArea() {
      return this.surfaceArea;
    }
}