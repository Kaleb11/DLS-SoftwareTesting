
package Testunit;
 
import java.util.concurrent.TimeUnit;
import java.util.logging.Level;
import java.util.logging.Logger;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;

/**
- *
 * @author kalebo
 */
public class Scrapper {
    protected WebDriver driver;
    
   public Scrapper() {
       System.setProperty("webdriver.chrome.driver", "C:\\chromedriver.exe");
       driver = new ChromeDriver();
       driver.get("http://localhost/DLMS/");
    }
    
     
    public boolean signuploginandlogout(String username,String password){
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.xpath("/html/body/div/div/div/form/div[3]/a")).click();
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("user")).sendKeys(username);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("pass")).sendKeys(password);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("signupbtn")).click();
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("user")).sendKeys(username);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("pass")).sendKeys(password);
       try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("btn")).click();
        try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.xpath("/html/body/ul/li/a")).click();
        
   try {
           WebElement element = driver.findElement(By.xpath("/html/body/div/div/div/form/div[1]/div[1]/h2"));
          if (element.isDisplayed()) {
                return true;
                }
                return false;
                }
        catch (Exception e) {
            return false;
        }
     
     
     }    
    {
        
}
    
    public boolean login(String username, String password) {
       
        driver.findElement(By.id("user")).sendKeys(username);
        try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("pass")).sendKeys(password);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("btn")).click();
        
        //driver.getCurrentUrl()
   
        try {
            WebElement element = driver.findElement(By.xpath("/html/body/ul/li/a"));
            if (element.isDisplayed()) {
                return true;
            }
            return false;
        }
        catch (Exception e) {
            return false;
        }
    }
    public boolean signupfail3(String username, String password) {
        
        driver.findElement(By.xpath("/html/body/div/div/div/form/div[3]/a")).click();

        driver.findElement(By.id("user")).sendKeys(username);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("pass")).sendKeys(password);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("signupbtn")).click();
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
       driver.findElement(By.id("user")).sendKeys(username);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("signupbtn")).click();
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("pass")).sendKeys(password);
        //driver.getCurrentUrl()
         driver.findElement(By.id("signupbtn")).click();
        try {
            WebElement element = driver.findElement(By.xpath("/html/body/div/div/div/form/div[1]/div[1]"));
            if (element.isDisplayed()) {
                return true;
            }
            return false;
        }
        catch (Exception e) {
            return false;
        }
    }
    
    public boolean signupfail1(String username, String password) {
        
         driver.findElement(By.xpath("/html/body/div/div/div/form/div[3]/a")).click();

        driver.findElement(By.id("user")).sendKeys(username);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("pass")).sendKeys(password);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("signupbtn")).click();
        
         
        try {
            WebElement element = driver.findElement(By.xpath("/html/body/div/div/div/form/div[1]/div[1]"));
            if (element.isDisplayed()) {
                return true;
            }
            return false;
        }
        catch (Exception e) {
            return false;
        }
    
     
     }    
      public boolean signupfail2(String username, String password) {
        
         driver.findElement(By.xpath("/html/body/div/div/div/form/div[3]/a")).click();

        driver.findElement(By.id("user")).sendKeys(username);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("pass")).sendKeys(password);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("signupbtn")).click();
        
         
        try {
            WebElement element = driver.findElement(By.xpath("/html/body/div/div/div/form/div[1]/div[1]"));
            if (element.isDisplayed()) {
                return true;
            }
            return false;
        }
        catch (Exception e) {
            return false;
        }
    
     
     }    
    
    
     public boolean logout(String username,String password){
         
        driver.findElement(By.id("user")).sendKeys(username);
        driver.findElement(By.id("pass")).sendKeys(password);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("btn")).click();
       
        driver.findElement(By.xpath("/html/body/ul/li/a")).click();
      
        
        
        
    try {
           WebElement element = driver.findElement(By.xpath("/html/body/div/div/div/form/div[1]/div[1]/h2"));
           if (element.isDisplayed()) {
                return true;
                }
                return false;
                }
        catch (Exception e) {
            return false;
        }
     
     
     }    
    
     public boolean adminusercontrol(String username,String password){
          try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.get("http://localhost/DLMS/admin/admin.php");
         try {
           Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
       }
        driver.findElement(By.xpath("/html/body/div/div/div[1]/a/div/img")).click();
        try {
           Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
       }
        driver.findElement(By.id("dispaly")).click();
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("user")).sendKeys(username);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("pass")).sendKeys(password);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("insert")).click();
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
       }
        driver.findElement(By.id("user")).sendKeys(username);
        try {
            Thread.sleep(2000);
       } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("delete")).click();
        try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("dispaly")).click();
       // driver.findElement(By.xpath("/html/body/ul/li/a")).click();
      
        
        
        
    try {
           WebElement element = driver.findElement(By.xpath("/html/body/form/b/p[2]/b"));
           if (element.isDisplayed()) {
                return true;
                }
                return false;
                }
       catch (Exception e) {
            return false;
        }
     
     
     } 
     public boolean Bookinfo(String username,String password){
         driver.findElement(By.id("user")).sendKeys(username);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("pass")).sendKeys(password);
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.id("btn")).click();
        
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.xpath("/html/body/div/div/div[1]/a/div/img")).click();
        try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.xpath("/html/body/div/div/div[1]/div/file/div/div/button")).click();
        try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
        driver.findElement(By.xpath("//*[@id=\"myModal\"]/div/div/div[3]/a[2]")).click();
         try {
            Thread.sleep(2000);
        } catch (InterruptedException ex) {
            Logger.getLogger(Scrapper.class.getName()).log(Level.SEVERE, null, ex);
        }
         
        driver.findElement(By.xpath("//*[@id=\"myModal\"]/div/div/div[3]/button[3]")).click();
        
    try {
           WebElement element = driver.findElement(By.xpath("/html/body/form/input"));
           if (element.isDisplayed()) {
                return true;
                }
                return false;
                }
        catch (Exception e) {
            return false;
        }
     
     
     } 
    
    
}