import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Barangay } from '../../database/entities/barangay.entity';

@Injectable()
export class BarangaysService {
    constructor(
        @InjectRepository(Barangay)
        private barangayRepository: Repository<Barangay>,
    ) { }

    async getAllBarangays(): Promise<Barangay[]> {
        return this.barangayRepository.find({
            order: { name: 'ASC' },
        });
    }

    async getBarangayBySlug(slug: string): Promise<Barangay | null> {
        return this.barangayRepository.findOne({
            where: { slug },
        });
    }
}
