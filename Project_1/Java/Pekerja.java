import java.util.Scanner;

public class Pekerja extends person{
    String nama, handphone, gender, dob, alamat;


    public static void main(String[] args) {
        String addrescompany, company, companyphone,  npwp ;

        
             Pekerja job = new Job();
            job.data ();
            
        Scanner keyboard = new Scanner(System.in);

        // Tampilkan output ke user
        System.out.println("DAFTAR NAMA PEKERJA");

         System.out.print("addrescompany : ");
        addrescompany = keyboard.nextLine();

        System.out.print("company: ");
        company = keyboard.nextLine();

        System.out.print("companyphone: ");
        companyphone = keyboard.nextLine();

         System.out.print("npwp : ");
        npwp = keyboard.nextLine();


      

        System.out.println("Addres Company : " + addrescompany);
        System.out.println("Company : " + company);
        System.out.println("Company Phone : " + companyphone);

        System.out.println("NPWP : " + npwp);
        }
}


