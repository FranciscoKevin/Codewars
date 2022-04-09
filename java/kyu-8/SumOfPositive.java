/*
    DESCRIPTION

    You get an array of numbers, return the sum of all of the positives ones.
    Example [1,-4,7,12] => 1 + 7 + 12 = 20

    Note: if there is nothing to sum, the sum is default to 0.
*/
public class SumOfPositive {
    public static int sum(int[] arr){
        int sum = 0;
        if(arr.length == 0) {
          return sum;
        } else {
            for (int value : arr){
                if(value >= 0) {
                    sum += value;
                }
            }
            return sum;
        }
    }
}