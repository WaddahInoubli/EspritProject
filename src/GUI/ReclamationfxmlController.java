/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;
import entities.Reclamation;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Label;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.text.Text;
import javafx.stage.Stage;
import services.serviceReclamation;
import utils.MyDB;
/**
 * FXML Controller class
 *
 * @author HP
 */
public class ReclamationfxmlController implements Initializable {

    @FXML
    private TextField tfobj;
    @FXML
    private TextField tftxt;
     
    
    @FXML
    private Text reclamation;
    @FXML
    private Text objectif;
    private TextField idrec;
    @FXML
    private Text reclamation1;
    @FXML
    private Text reclamation11;
    @FXML
    private Button A;
   

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
    
    }    

    
   

    @FXML
    private void afff(MouseEvent event) {
        
        try {
            FXMLLoader fxmlLoader = new FXMLLoader();
            fxmlLoader.setLocation(getClass().getResource("AfficheRec.fxml"));
            AnchorPane anchorPane;
            anchorPane = fxmlLoader.load();
            Stage stage = new Stage();
            stage.setScene(new Scene(anchorPane));
            stage.show();
            serviceReclamation s = new serviceReclamation();
        } catch (IOException ex) {
            Logger.getLogger(ReclamationfxmlController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void ajjout(ActionEvent event) {
        if (tfobj.getText().isEmpty() || tftxt.getText().isEmpty() )
               {
                Alert a = new Alert(Alert.AlertType.ERROR, "données invalide(s)", ButtonType.OK);
            a.showAndWait();   
               }
               else { 
                   try{
        Reclamation r1 = new Reclamation(tfobj.getText(),tftxt.getText(),333,0); 
        

        serviceReclamation s= new serviceReclamation();
        s.ajouter2(r1);    
         Alert a = new Alert(Alert.AlertType.INFORMATION, "Ajout effectué", ButtonType.OK);
            a.showAndWait();   
    }
              catch (SQLException ex) {
                Alert a = new Alert(Alert.AlertType.ERROR, ex.getMessage(), ButtonType.OK);
                a.showAndWait();
              }
               }
    }
    
    
}
