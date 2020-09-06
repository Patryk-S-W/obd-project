import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
 
import org.openqa.selenium.By;
import org.openqa.selenium.WebElement;
 
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;
 
import org.junit.Assert;
 
public class FakeTrafic {
  public static void main(String[] args) {
 
    WebDriver d = new FirefoxDriver();
 
    d.get("http://dev.patryksadowski.engineer");
 
    WebElement usernameEl      = d.findElement(By.name("username"));
    WebElement emailEl         = d.findElement(By.name("email"));
    WebElement passwordEl      = d.findElement(By.name("password_1"));
    WebElement password2El     = d.findElement(By.name("password_2"));
    WebElement titleEl         = d.findElement(By.name("title"));
    WebElement firstnameEl     = d.findElement(By.name("firstname"));
    WebElement lastnameEl      = d.findElement(By.name("lastname"));
    WebElement genderEl        = d.findElement(By.name("gender"));
    WebElement levelEl         = d.findElement(By.name("level"));
    WebElement datediplomaEl   = d.findElement(By.name("datediploma"));
    WebElement erc1El          = d.findElement(By.name("erc1"));
    WebElement erc2El          = d.findElement(By.name("erc2"));
    WebElement erc3El          = d.findElement(By.name("erc3"));
    WebElement countryaffilationEl          = d.findElement(By.name("countryaffilation"));
    WebElement intstitutionaffilationEl     = d.findElement(By.name("intstitutionaffilation"));
    WebElement nameofinstitutionEl          = d.findElement(By.name("nameofinstitution"));
    WebElement departamentEl                = d.findElement(By.name("departament"));
    WebElement cityEl         = d.findElement(By.name("city"));
    WebElement countryEl      = d.findElement(By.name("country"));
    WebElement orcidEl        = d.findElement(By.name("orcid"));
    WebElement wg1El          = d.findElement(By.name("wg1"));
    WebElement wg2El          = d.findElement(By.name("wg2"));
    WebElement wg3El          = d.findElement(By.name("wg3"));
    WebElement photoEl        = d.findElement(By.name("photo"));
    WebElement websiteEl      = d.findElement(By.name("website"));
    WebElement confirm1El     = d.findElement(By.name("confirm1"));
    WebElement confirm2El     = d.findElement(By.name("confirm2"));
    WebElement confirm3El     = d.findElement(By.name("confirm3"));
    WebElement confirm4El     = d.findElement(By.name("confirm4"));
    WebElement formElement        = d.findElement(By.class("needs-validation"));
 
    usernameElement.sendKeys("Patryk");
    usernameElement.sendKeys("patryksadowski00@gmail.com");
    passwordElement.sendKeys("1234567890Qq");
    password2Element.sendKeys("1234567890Qq");
    titleEl.sendKeys"Mr";
    firstnameEl.sendKeys"Patryk";
    lastnameEl.sendKeys"Sadowski";
    genderEl.sendKeys"male";
    levelEl.sendKeys"phd";
    datediplomaEl.sendKeys"1990";
    erc1El.sendKeys" Particle physics";
    erc2El.sendKeys" Particle physics";
    erc3El.sendKeys" Particle physics";
    countryaffilationEl.sendKeys"Poland";
    intstitutionaffilationEl.sendKeys"TEST";
    nameofinstitutionEl.sendKeys"TEST";
    departamentEl.sendKeys"TEST";
    cityEl.sendKeys"Gdansk";
    countryEl.sendKeys"Poland";
    orcidEl.sendKeys"000-000-000";
    wg1El.sendKeys"1";
    wg2El.sendKeys"1";
    wg3El.sendKeys"0";
    photoEl.sendKeys"j:/test.png";
    websiteEl.sendKeys"TEST";
    confirm1El.sendKeys"1";
    confirm2El.sendKeys"1";
    confirm3El.sendKeys"1";
    confirm4El.sendKeys"1";
 
    formElement.submit();
 
 
    WebDriverWait wait = new WebDriverWait(d, 10);
    WebElement messageElement = wait.until(
           ExpectedConditions.presenceOfElementLocated(By.id("loginResponse"))
    );
 
    String message                 = messageElement.getText();
    String successMsg             = "You registered successfully.";
    Assert.assertEquals (message, successMsg);
 
    d.quit();
  }
}