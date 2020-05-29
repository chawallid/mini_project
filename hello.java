import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class hello {
    public static void main( final String [] args) {
        int head = 0 ; 
        int [] pos = {0, 0};
        System.out.println("start");
        System.out.print(Arrays.toString(pos));
        String head_str = "";
        int [] Array_A = {1,3,2,5,4,4,6,3,2};
        List<int []> path =  new ArrayList<>(); 
        for(int i = 0 ; i < Array_A.length ; i++)
        {
            if(head >= 4)
            {
                head = 0;
            }

            if(head == 0)
            {   
                head_str = "North";
                pos[1] = pos[1] + Array_A[i];

            }else if(head == 1)
            {
                head_str = "East";
                pos[0] = pos[0] + Array_A[i];
            }else if(head == 2)
            {
                head_str = "South";
                pos[1] = pos[1] - Array_A[i];
            }else if(head == 3)
            {
                head_str = "West";
                pos[0] = pos[0] - Array_A[i];
            }
            path.add(pos);
            System.out.print(" -> ");
            System.out.print(Arrays.toString(pos));
            System.out.print("  ");
            System.out.print(i+1);
            System.out.print(" steps  move :");
            System.out.print(Array_A[i]);
            System.out.print(" ");
            System.out.print(head_str);
            System.out.print("\n");
            if(i < Array_A.length - 1 )
            {
            System.out.print(Arrays.toString(pos));
            }
            head ++;  
        }
        System.out.println(path);

        
    }    
}