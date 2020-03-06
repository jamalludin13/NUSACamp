/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package bangunruang;

/**
 *
 * @author Jamalludin
 */
public class Bangunruang {
    int panjang,lebar,tinggi,sisi;
    int volumeb,volumek,volume;
   
    public static void main(String[] args) {
  
        kubus ba=new kubus();
        balok lk=new balok();
        kerucut cu=new kerucut();
        
        cu.Bangunruang(10,11,20);
        ba.Bangunruang(3,4,9);
        lk.Bangunruang(4,8,5);
    
      
    }
}