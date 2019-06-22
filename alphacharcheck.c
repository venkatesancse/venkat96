#include<stdio.h> 
#include<stdlib.h> 
int main() 
{ 
    char str[100];
    scanf("%s",&str);
    int alphabet = 0, number = 0, i; 
    for (i=0; str[i]!= '\0'; i++) 
    {
        if (isalpha(str[i]) != 0) 
        {
            alphabet++; 
        }
        else if (isdigit(str[i]) != 0) 
        {
            number++;
        }
    } 
    if(alphabet&&number>0)
    {
        printf("Yes");
    }
    else
    {
        printf("No");
    }
  
    return 0; 
} 
