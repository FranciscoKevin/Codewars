/*
    DESCRIPTION

    Given a string, you have to return a string in which each character (case-sensitive) is repeated once.

    Examples (Input -> Output):
    * "String"      -> "SSttrriinngg"
    * "Hello World" -> "HHeelllloo  WWoorrlldd"
    * "1234!_ "     -> "11223344!!__  "
*/

public class DoucleChar {
    public static String doubleChar(String s) {
        String newStr = "";
        for (int i = 0; i < s.length(); i++) {
            newStr += s.charAt(i);
            newStr += s.charAt(i);
        }
        return newStr;
      }
}
