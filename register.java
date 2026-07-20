import java.sql.Connection;
import java.sql.PreparedStatement;

public class Register {
public static void main(String[] args) {
try {
Connection con = DBConnection.getConnection();

```
        String name = "Test User";
        String email = "test@gmail.com";
        String password = "1234";

        String query = "INSERT INTO users(name,email,password) VALUES(?,?,?)";
        PreparedStatement ps = con.prepareStatement(query);
        ps.setString(1, name);
        ps.setString(2, email);
        ps.setString(3, password);

        int i = ps.executeUpdate();

        if(i > 0){
            System.out.println("User Registered Successfully");
        }

    } catch(Exception e){
        e.printStackTrace();
    }
}
```

}
