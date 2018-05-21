import java.util.*;

public class Palindrome {
    public void primFac(long x){
        long[] l1;
        while (x % 2 == 0){
            //System.out.print(2);
            //l1.add(2);
            x = x / 2;
        }
        for(int i = 3; i<= Math.sqrt(x); i = i+2){
            while (x % i == 0){
                //System.out.print(i);
                //l1.add(i);
                x = x / i;
            }
        }
        if(x > 2){
            //System.out.print(x); //Add to list
            //l1.add(x);
        }
        //int max = Collections.max(l1);
        //System.out.println(max);
    }
    public void isPalindrome(String n){
        String original, reverse = "";
        original = n;
        int length = original.length();

        for (int i = length - 1; i>=0; i--){
            reverse = reverse + original.charAt(i);
        }
        if (original.equals(reverse)){
            System.out.println("Is Palindrome!");
        } else {
            System.out.println("Not Palindrome!");
        }
    }
    public static void main(String[] args){
        Scanner in = new Scanner(System.in);
        long x = 600851475143L;
        //new Palindrome().primFac(x);
        //System.out.println("Enter a String to check if its palindrome");
        //String original = in.nextLine();
        //new Palindrome().isPalindrome(original);

    }
}
