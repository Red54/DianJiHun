#include <stdio.h>
int main()
{
	int m=1,n=2,s=0;
	while(m<=4000000&&n<=4000000)
	{
		if(!(m%10%2))s+=m;
		if(!(n%10%2))s+=n;
		m+=n;
		n+=m;
	}
	printf("%d\n",s);
	return 0;
}
