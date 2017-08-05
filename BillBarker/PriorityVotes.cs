using System;

public class PriorityVotes
{
    int PriorityVotesId { get; set; }
    int Votes { get; set; }

    public PriorityVotes()
	{
	}
    
    ArticleBill ArticleIs { get; set; }
    Priority IsPriority { get; set; }
}
