import java.io.*;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.*;

public class Anon {
    public static void main(String[] args) {

        String csvFile = "prints";
        BufferedReader br = null;
        String line = "";
        String cvsSplitBy = ",";

        try {

            br = new BufferedReader(new FileReader(csvFile +".csv"));
            BufferedWriter bw = new BufferedWriter(new FileWriter(csvFile +"_anon" +".csv"));
            br.readLine();
            Map<String, Integer> emails = new HashMap<>();;
            int id_counter = 1;

            bw.write("Email,Affiliation,Department,Major,Is this for a course?,Course Number,PCard,Pickup Location,Number of files submitted,Are you willing for photographs of your print to be used for publicity and marketing?,Part Name,Quantity,Color (First Choice),Color (Second Choice),Color (Third Choice),Part Name 1,Quantity 1,Color (First Choice) 1,Color (Second Choice) 1,Color (Third Choice) 1,Upload File 1,Part Name 2,Quantity 2,Color (First Choice) 2,Color (Second Choice) 2,Color (Third Choice) 2,Upload File 2,Part Name 3,Quantity 3,Color (First Choice) 3,Color (Second Choice) 3,Color (Third Choice) 3,Upload File 3,Part Name 4,Quantity 4,Color (First Choice) 4,Color (Second Choice) 4,Color (Third Choice) 4,Upload File 4,Part Name 5,Quantity 5,Color (First Choice) 5,Color (Second Choice) 5,Color (Third Choice) 5,Upload File 5,Maker Location,Request Status,File 1 Grams,File 2 Grams,File 3 Grams,File 4 Grams,File 5 Grams,File 6 Grams,Staff Notes - Viewable by staff only,Waiver,Total Grams,Cost Per Gram,Minimum Price,Estimated Cost,Sliced Files,UUID,Request Cancellation,Time,Time 1,Time 2,Time 3,Time 4,Time 5,Total Time,Assigned Color File 1,Assigned Color File 2,Assigned Color File 3,Assigned Color File 4,Assigned Color File 5,Assigned Color File 6,Staff Name,Assigned Printer File 1,Assigned Printer File 2,Assigned Printer File 3,Assigned Printer File 4,Assigned Printer File 5,Assigned Printer File 6,Amount Paid,Date/Time Paid,CashNet confirmation #,Created By (User Id),Entry Id,Entry Date,Source Url,Transaction Id,Payment Amount,Payment Date,Payment Status,Post Id,User Agent,User IP,Approval Status\n");
            while ((line = br.readLine()) != null) {

                // use comma as separator
                String[] order = line.split(cvsSplitBy, -1);
                order[0] = order[0].toLowerCase();
                if (!emails.containsKey(order[0])) {
                    emails.put(order[0], id_counter);
                    //System.out.println(id_counter + "   " + order[0]);
                    id_counter++;
                }
                String anonline = emails.get(order[0]) + line.substring(order[0].length(), line.length()) + "\n";
                    bw.write(anonline);

            }
            
            br.close();
            bw.close();

        } catch (FileNotFoundException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        } finally {
            if (br != null) {
                try {
                    br.close();
                } catch (IOException e) {
                    e.printStackTrace();
                }
            }
        }

    }

}