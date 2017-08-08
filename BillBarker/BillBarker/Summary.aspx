<%@ Page Title="Summary" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Summary.aspx.cs" Inherits="BillBarker.Summary" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">
    
    
    <div id="summaryContent" class="jumbotron">
        <h2><%: Title %>.</h2>
        <h3>Summary page</h3>
        <p>Use this area to provide additional information.</p>
    </div>
    <div id="commentContainer" class="container">

        <p>Fake comment box</p>
        <asp:TextBox ID="TextBox1" runat="server" Height="125px" Width="234px"></asp:TextBox>

         <div class="usertextButtons">
             <button type="button" value="Post Comment">Post Comment</button>
             <button type="button" value="Preview">Preview</button>
         </div>
    </div>

</asp:Content>

