/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Testunit;

import org.junit.Test;
import static org.junit.Assert.*;
/**
 *
 * @author kalebo
 */
/* This project created by
Kaleb Tilahun
Abenizer W/michael
Amanuel Demis
Meskerem Negusie
Kalkidan Zena
*/
public class WebTest {
    
   /* @Test
     public void signupTestpass(){
       Scrapper s = new Scrapper();
       assertEquals(s.signup("Hi", "hello"),true);
    }*/
    @Test
    public void loginTestPass() {
        Scrapper s = new Scrapper();
        assertEquals(s.login("kaleb", "0925000000"), true);
    }
      
    @Test
    public void signuploginandlogoutTest(){
       
       Scrapper s = new Scrapper();
       //s.signupandlogin("Abenizer", "00");
       assertEquals(s.signuploginandlogout("Abenizer","00"),true);
    
    }
  
    
    @Test
    public void loginTestFail() {
        Scrapper s = new Scrapper();
        assertNotEquals(s.login("kale", "0925000000"), true);
    }
    @Test
    public void adminTest() {
        Scrapper s = new Scrapper();
        assertEquals(s.adminusercontrol("kalebss", "09222222"), true);
    }
    @Test
    public void signupFailTest() {
        Scrapper s = new Scrapper();
         assertEquals(s.signupfail1("", ""), true);
    }
    @Test
    public void signupFailTest2() {
        Scrapper s = new Scrapper();
         assertEquals(s.signupfail2("kaleb", ""), true);
    }
     @Test
    public void signupFailTest3() {
        Scrapper s = new Scrapper();
         assertEquals(s.signupfail3("", "0925000000"), true);
    }
    
    
    @Test
    public void BookinfoTest() {
        Scrapper s = new Scrapper();
        assertEquals(s.Bookinfo("kaleb","0925000000"),true);
    }
   
}
