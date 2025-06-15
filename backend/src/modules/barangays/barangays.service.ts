import { Injectable } from '@nestjs/common';
import { Logger } from '@nestjs/common';

export interface Barangay {
    id: string;
    name: string;
    slug: string;
    population: number;
    populationPercentage: number;
    description: string;
}

@Injectable()
export class BarangaysService {
    private readonly logger = new Logger(BarangaysService.name);

    private readonly barangays: Barangay[] = [
        {
            id: '1',
            name: 'Albino Taruc',
            slug: 'albino-taruc',
            population: 3988,
            populationPercentage: 15.37,
            description:
                'Its population as determined by the 2020 Census was 3,988. This represented 15.37% of the total population of Socorro.',
        },
        {
            id: '2',
            name: 'Del Pilar',
            slug: 'del-pilar',
            population: 511,
            populationPercentage: 1.97,
            description:
                'Its population as determined by the 2020 Census was 511. This represented 1.97% of the total population of Socorro.',
        },
        {
            id: '3',
            name: 'Helene',
            slug: 'helene',
            population: 812,
            populationPercentage: 3.13,
            description:
                'Its population as determined by the 2020 Census was 812. This represented 3.13% of the total population of Socorro.',
        },
        {
            id: '4',
            name: 'Honrado',
            slug: 'honrado',
            population: 422,
            populationPercentage: 1.63,
            description:
                'Its population as determined by the 2020 Census was 422. This represented 1.63% of the total population of Socorro.',
        },
        {
            id: '5',
            name: 'Navarro',
            slug: 'navarro',
            population: 2822,
            populationPercentage: 10.88,
            description:
                'Its population as determined by the 2020 Census was 2,822. This represented 10.88% of the total population of Socorro.',
        },
        {
            id: '6',
            name: 'Nueva Estrella',
            slug: 'nueva-estrella',
            population: 1876,
            populationPercentage: 7.23,
            description:
                'Its population as determined by the 2020 Census was 1,876. This represented 7.23% of the total population of Socorro.',
        },
        {
            id: '7',
            name: 'Pamosaingan',
            slug: 'pamosaingan',
            population: 1191,
            populationPercentage: 4.59,
            description:
                'Its population as determined by the 2020 Census was 1,191. This represented 4.59% of the total population of Socorro.',
        },
        {
            id: '8',
            name: 'Rizal',
            slug: 'rizal',
            population: 4910,
            populationPercentage: 18.93,
            description:
                'Its population as determined by the 2020 Census was 4,910. This represented 18.93% of the total population of Socorro.',
        },
        {
            id: '9',
            name: 'Salog',
            slug: 'salog',
            population: 1001,
            populationPercentage: 3.86,
            description:
                'Its population as determined by the 2020 Census was 1,001. This represented 3.86% of the total population of Socorro.',
        },
        {
            id: '10',
            name: 'San Roque',
            slug: 'san-roque',
            population: 818,
            populationPercentage: 3.15,
            description:
                'Its population as determined by the 2020 Census was 818. This represented 3.15% of the total population of Socorro.',
        },
        {
            id: '11',
            name: 'Santa Cruz',
            slug: 'santa-cruz',
            population: 493,
            populationPercentage: 1.9,
            description:
                'Its population as determined by the 2020 Census was 493. This represented 1.90% of the total population of Socorro.',
        },
        {
            id: '12',
            name: 'Sering',
            slug: 'sering',
            population: 4738,
            populationPercentage: 18.26,
            description:
                'Its population as determined by the 2020 Census was 4,738. This represented 18.26% of the total population of Socorro.',
        },
        {
            id: '13',
            name: 'Songkoy',
            slug: 'songkoy',
            population: 1496,
            populationPercentage: 5.77,
            description:
                'Its population as determined by the 2020 Census was 1,496. This represented 5.77% of the total population of Socorro.',
        },
        {
            id: '14',
            name: 'Sudlon',
            slug: 'sudlon',
            population: 864,
            populationPercentage: 3.33,
            description:
                'Its population as determined by the 2020 Census was 864. This represented 3.33% of the total population of Socorro.',
        },
    ];

    getAllBarangays(): Barangay[] {
        this.logger.log('Getting all barangays');
        return this.barangays;
    }

    getBarangayBySlug(slug: string): Barangay | null {
        return this.barangays.find((barangay) => barangay.slug === slug) || null;
    }
}
