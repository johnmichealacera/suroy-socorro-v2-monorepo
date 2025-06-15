import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { BarangaysController } from './barangays.controller';
import { BarangaysService } from './barangays.service';
import { Barangay } from '../../database/entities/barangay.entity';

@Module({
    imports: [TypeOrmModule.forFeature([Barangay])],
    controllers: [BarangaysController],
    providers: [BarangaysService],
})
export class BarangaysModule { }
