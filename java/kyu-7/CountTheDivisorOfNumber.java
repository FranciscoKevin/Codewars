/*
    DESCRIPTION
  
    Count the number of divisors of a positive integer n.
    Random tests go up to n = 500000.

    Examples (input --> output):
    4 --> 3 (1, 2, 4)
    5 --> 2 (1, 5)
    12 --> 6 (1, 2, 3, 4, 6, 12)
    30 --> 8 (1, 2, 3, 5, 6, 10, 15, 30)
*/

import java.util.*;

public class CountTheDivisorOfNumber {
  public long numberOfDivisors(int n) {
    LinkedList<Integer> divisor = new LinkedList<>();
    for (int i = 1; i <= n; i++) {
      if (n%i == 0) {
        divisor.add(i);
      }
    }
    return divisor.size();
  }
}