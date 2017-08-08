using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;

namespace BillBarker
{
    public partial class _Default : Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {



            // Connect to the database
            string connString = "Data Source=DESKTOP-Q0178UJ\\SQLEXPRESS;Initial Catalog=BillBarkerDB2;Integrated Security=True";
            SqlConnection conn = new SqlConnection(connString);
            conn.Open();

            // Create a command
            SqlCommand cmd = new SqlCommand("SELECT [Id],[Questionable],[Verified],[QuestionableCount],[InfluenceId],[SourceId],[PriorityId],[Title],[IsBill],[IsSpotlight],[Updated]FROM[dbo].[ArticleBill]");
            cmd.CommandType = System.Data.CommandType.Text;
            cmd.Connection = conn;

            // Read from database
            SqlDataReader reader = cmd.ExecuteReader();




            // Probably should read in a different way later on

            string temp = "";


            while (reader.Read())
            {
                //temp += reader["Id"].ToString();
                // temp += reader["QuestionableFlag"].ToString();
                // temp += reader["VerifiedFlag"].ToString();
                // temp += reader["QuestionableCount"].ToString();
                temp += reader["Title"].ToString();
                //  temp += reader["IsBill"].ToString();
                // temp += reader["IsSpotlight"].ToString();
                // temp += reader["Updated"].ToString();
                //  temp += "<br/>";
            }


            conn.Close();


            article_test.Text = temp;
        }
    }
}