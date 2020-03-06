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
public class kubus extends Bangunruang {
    private int volumek;
    public void Bangunruang(int pangjang,int lebar,int tinggi){
        
        this.panjang=panjang;
        this.lebar=lebar;
        this.tinggi=tinggi;
        
        volumek = panjang*lebar*tinggi;
        System.out.println("Menghitung Kubus = "+volumek);
    }
    
}
