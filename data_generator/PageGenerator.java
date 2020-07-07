import java.io.*;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;

public class PageGenerator {
    public static void main(String[] args) {

        String csvFile = "database.csv";
        BufferedReader br = null;
        Writer wr = null;
        String line = "";
        String cvsSplitBy = "#";

        try {

            br = new BufferedReader(new FileReader(csvFile));
            br.readLine();

            while ((line = br.readLine()) != null) {

                // use comma as separator
                String[] book = line.split(cvsSplitBy, -1);
                String title = book[0].replaceAll("[^a-zA-Z0-9 ]", "");
                title = title.replaceAll("  ", " ");
                String[] words = title.split(" ");
                String grub = "";
                for (int i = 0; i < 5 && i < words.length; i++) {
                    grub += words[i] + "-";
                }
                grub = grub.substring(0, grub.length() - 1).toLowerCase();
                //System.out.println(book);

                System.out.println(new File("../user/pages/02.books/" + grub).mkdirs());
                wr = new BufferedWriter(new FileWriter(new File("../user/pages/02.books/" + grub + "/item.md")));
                wr.write("---\ntitle: " + book[0] + "\ntaxonomy:" + "\n\tauthor: " + book[2] + "\n\tpubdate: " + book[3]
                        + "\n\taudience: " + book[5] + "\n\texpertise: " + book[6] + "\n---\n");

                wr.write("## " + book[0]);

                if (!book[2].isEmpty()) {
                    wr.write("\n### By " + book[2]);
                }
                if (!book[13].isEmpty()) {
                    wr.write("\n" + book[13]);
                }
                if (!book[3].isEmpty()) {
                    wr.write("\n\n**Publication Date:** " + book[3]);
                }
                if (!book[6].isEmpty()) {
                    wr.write("\n\n**Expertise Level:** " + book[6]);
                }
                if (!book[5].isEmpty()) {
                    wr.write("\n\n**Intended Audience:** " + book[5]);
                }
                if (!book[4].isEmpty()) {
                    wr.write("\n\n**ISBN:** " + book[4]);
                }
                if (!book[11].isEmpty()) {
                    wr.write("\n\n[Amazon Link](" + book[11] + ")");
                }
                if (!book[12].isEmpty()) {
                    wr.write("\n\n[Worldcat Link](" + book[12] + ")");
                }
                wr.close();
            }

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