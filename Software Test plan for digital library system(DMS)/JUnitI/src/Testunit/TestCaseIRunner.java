/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Testunit;

/**
 *
 * @author kalebo
 */
import org.junit.runner.JUnitCore;
import org.junit.runner.Result;
import org.junit.runner.notification.Failure;

public class TestCaseIRunner {
    public static void main(String[] args) {
        Result result = JUnitCore.runClasses(WebTest.class);
		
        for (Failure failure : result.getFailures()) 
        {
           System.out.println(failure.toString());
        }
        System.out.println(result.wasSuccessful());
        
    }
}
