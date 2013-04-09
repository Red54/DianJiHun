#include<stdio.h>
int main()
{
	long long i,j,k,l=600851475143,m;
	for(i=2;i*i<=l;i++)
	{
		j=1;
		for(k=2;k*k<=i;k++)
			if(!(i%k))
			{
				j=0;
				break;
			}
		if(j)if(!(l%i))m=i;
	}
	printf("%lld\n",m);
	return 0;
}
