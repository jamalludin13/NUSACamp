import java.util.Scanner;

public class person {
 
    public static void main(String[] args) {
        // deklarasi variabel
        String nama, handphone, gender, dob, alamat;

        // membuat scanner baru
        Scanner keyboard = new Scanner(System.in);

        // Tampilkan output ke user
        System.out.println("Daftar Nama Keluarga : ");
        System.out.print("Nama : ");
        nama = keyboard.nextLine();
        
        System.out.print("handphone: ");
        handphone = keyboard.nextLine();

        System.out.print("gender: ");
        gender = keyboard.nextLine();

        System.out.print("dob: ");
        dob = keyboard.nextLine();

         System.out.print("alamat : ");
        alamat = keyboard.nextLine();

      
        // Menampilkan apa yang sudah simpan di variabel
        System.out.println("--------------------");
        System.out.println("Nama : " + nama);
        System.out.println("Handphone : " + alamat);

        System.out.println("Gender : " + gender);
        System.out.println("DOB : " + dob);

        System.out.println("Alamat : " + alamat);
}
}

