/*
    DESCRIPTION

    Consider an array/list of sheep where some sheep may be missing from their place.
    We need a function that counts the number of sheep present in the array (true means present).

    For example:
    [true,  true,  true,  false,
    true,  true,  true,  true ,
    true,  false, true,  false,
    true,  false, false, true ,
    true,  true,  true,  true ,
    false, false, true,  true]
    The correct answer would be 17.
*/

public class CountingSheep {
    public int countSheeps(Boolean[] arrayOfSheeps) {
        int count = 0;
        for (Boolean present : arrayOfSheeps) {
            if (present != null && present == true) {
                count++;
            }
        }
        return count;
    }
}