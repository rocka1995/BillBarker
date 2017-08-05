using System;

public class PriorityVotes
{
    int PriorityVotesId { get; set; }
    int Votes { get; set; }

    public PriorityVotes()
	{
	}
    
    ArticleBill ArticleBillIs { get; set; }
    Priority PriorityIs { get; set; }
}
