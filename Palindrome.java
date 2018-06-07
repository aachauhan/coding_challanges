import java.util.*;

public class Palindrome {
    public void primFac(long x){
        //this entire solution need a different approach
		//from the problem I know that I need sollowing components
		//function to find factors especially prime factors
		//find the prime factor of big number 600851475143
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
