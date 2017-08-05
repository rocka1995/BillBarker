using System;

public class ArticleBill
{
    int Id { get; set; }

    bool QuestionableFlag { get; set; }

    bool VerifiedFlag { get; set; }

    int QuestionableCount { get; set; }

    string Title { get; set; }

    bool IsBill { get; set; }

    bool IsSpotlight { get; set; }

    DateTime LastUpdate { get; set; }

    RealmOfInfluence InInfluence { get; set; }

    Source FromSource { get; set; }

    Priority IsPriority { get; set; }
}
