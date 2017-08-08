using System;

public class Tags
{
    int Id { get; set; }
    string Name { get; set; }
    bool IsRequest { get; set; }

    public Tags()
	{
	}

    Influence InfluenceIs { get; set; }
    ArticleBill ArticleIs { get; set; }
}
