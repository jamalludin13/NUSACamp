import java.util.Scanner;

public class caleg extends person {
 
    public static void main(String[] args) {
    
        String partai;
        String noUrut;
        String dapil;
        String istri; 
        String anak1;
        String anak2;

        caleg myCaleg = new caleg();
    
        myCaleg.data ();

        Scanner keyboard = new Scanner(System.in);

    
        System.out.println("Daftar Calon Legislatif : ");

        System.out.print("Partai : ");
        partai = keyboard.nextLine();
        
        System.out.print("No urut: ");
        noUrut = keyboard.nextLine();

        System.out.print("Dapil: ");
        dapil= keyboard.nextLine();

        System.out.print("Data Keluarga: ");
        System.out.print("istri: ");
        istri = keyboard.nextLine();

        System.out.print("anak1 : ");
        anak1 = keyboard.nextLine();

         System.out.print("anak2 : ");
        anak2 = keyboard.nextLine();


        System.out.println("--------------------");
        System.out.println("Partai : " + partai);
        System.out.println("No Urut : " + noUrut);

        System.out.println("Dapil : " + dapil);
        System.out.print("Data Keluarga: ");
        System.out.println("Istri : " + istri);

        System.out.println("Anak Pertama : " + anak1);
        System.out.println("Anak Kedua : " + anak2);  
        //
}
}

