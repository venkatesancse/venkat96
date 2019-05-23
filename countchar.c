#include <stdio.h>
#include <string.h>
void main()
{
    char str[50];
    int i=0, chr=0;
    scanf("%s",&str);
    while (str[i] != '\0')
    {
        if (str[i] == ' ')
        {
         word++;
            chr++;
        }
        else
            chr++;
        i++;
    }
    printf("\n %d", chr);
}
