#include <stdio.h> 
#include <string.h> 
int main() 
{ 
    char str[100];
    gets(str);
    int l = 0; 
    int h = strlen(str) - 1;  
    while (h > l) 
    { 
        if (str[l++] != str[h--]) 
        { 
            printf("no");
            return;
        } 
    } 
    printf("yes"); 
    return 0; 
}
